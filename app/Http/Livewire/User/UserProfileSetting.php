<?php

namespace App\Http\Livewire\User;

use App\Models\Post;
use App\Models\Unit;
use App\Models\User;
use App\Models\Branch;
use Livewire\Component;
use Hamcrest\Type\IsNumeric;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use App\Http\Livewire\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserProfileSetting extends Component
{

    use WithFileUploads;

    protected $listeners = ['editSelectedUser', 'changeModeConfirmed', 'ItemRemoveConfirmed', 'refresh' => '$refresh',];


    public $fName, $lName, $password, $password_confirmation, $mobile, $telegram, $whatsapp, $email, $birthDate, $gender, $localNumber,
        $userBranch, $userUnit, $userPost, $userSign, $branches, $units, $posts, $active, $profilePath, $profilePhoto, $proImg,
        $userHaveProfileImg, //if user set a profile picture, the remove buttom will show to him, otherwise the button will hide
        $selectedUser; //this is for detect if admin select a user to modify the profile or no.



    // ==============================================================================

    protected $rules = [
        'email' => 'nullable|email',
        'password' => 'nullable|confirmed',
        'password_confirmation' => 'nullable|same:password',
        'mobile' => 'nullable|numeric',
        'telegram' => 'nullable|numeric',
        'whatsapp' => 'nullable|numeric',
        'localNumber' => 'nullable|numeric',
    ];
    protected $messages = [
        'email.email' => 'فرمت آدرس ایمیل اشتباه است',
        'password.confirmed' => 'پسورد و تکرار پسورد یکسان نیست',
        'password_confirmation.required' => 'فیلد تکرار عبور نمی تواند خالی باشد',
        'password_confirmation.same' => 'پسورد و تکرار پسورد یکسان نیست',
        'mobile.numeric' => 'فرمت شماره تلفن صحیح نیست',
        'telegram.numeric' => 'فرمت شماره تلگرام صحیح نیست',
        'whatsapp.numeric' => 'فرمت شماره واتساپ صحیح نیست',
        'localNumber.numeric' => 'فرمت شماره داخلی صحیح نیست',
    ];

    // ==============================================================================


    public function save(Request $request)
    {

        $this->validate();



        // dd($request->input('updatedBranch'));
        //if admin wants to edit user, the name and fname also should be save to DB
        if (Auth::user()->post_id == 1) {
            if (!is_numeric($this->userBranch)) {
                $this->userBranch = Branch::where('branchName', $this->userBranch)->pluck('id')[0];
            }
            if (!is_numeric($this->userUnit)) {
                $this->userUnit = Unit::where('unitName', $this->userUnit)->pluck('id')[0];
            }
            if (!is_numeric($this->userPost)) {
                $this->userPost = Post::where('postName', $this->userPost)->pluck('id')[0];
            }
            $this->selectedUser->update([
                'fName' => $this->fName,
                'lName' => $this->lName,
                'gender' => $this->gender,
                'birthDate' => $this->birthDate,
                'branch_id' => $this->userBranch,
                'unit_id' => $this->userUnit,
                'post_id' => $this->userPost,
            ]);

            //for upload new sign image for user
            if (file_exists('storage/Data/sign.png')) {
                Storage::move('public/Data/sign.png', 'public/Data/' . $this->selectedUser->id . '/sign/sign.png');
            }
        }

        if ($this->password) {
            $this->selectedUser->update([
                'password' => Hash::make($this->password),
            ]);
        }

        //this part is for all users that can change the following items in their profile
        $this->selectedUser->update([

            'mobileNumber' => $this->mobile,
            'telegramNumber' => $this->telegram,
            'whatsappNumber' => $this->whatsapp,
            'email' => $this->email,
            'localNumber' => $this->localNumber,
        ]);

        $this->loadData();
        $this->emit('refresh');
        $this->dispatchBrowserEvent('swal:UpdateSuccess');
    }

    // ==============================================================================

    public function confirmChangeAvtiveMode()
    {

        $this->dispatchBrowserEvent('swal:areYouSure', [
            'item' => $this->selectedUser->id,
            'callback' => 'changeModeConfirmed',
        ]);
    }

    public function changeModeConfirmed($item)
    {
        $this->selectedUser->update(['active' => !$this->selectedUser->active]);
        $this->active = $this->selectedUser->active; //update the button mode in the panel
        $this->dispatchBrowserEvent('toastr:Success');
        $this->emit('refresh');
    }

    // ==============================================================================

    //triggers when user click remove profile photo button
    //this is a global function to get confirm from user to remove any kind of information.
    // the item that user wants to remove will be sent to itemremoveconfirmed function
    // and that function will remove the user selected item
    public function confirmDelete($itemName)
    {
        $this->dispatchBrowserEvent('swal:itemDelConfirm', [
            'itemName' => $itemName,
            'callback' => 'ItemRemoveConfirmed',
        ]);
    }



    //this function will trigger after user accept to remove the selected item
    // the item name will catch from confirmDelete function
    public function ItemRemoveConfirmed($itemName)
    {

        switch ($itemName[0]) {
            case 'profileImage':
                try {
                    unlink('storage/Data/' . $this->selectedUser->id . '/profile/profile.jpg');
                } catch (\Throwable $th) {
                    $this->dispatchBrowserEvent('toastr:Success');
                }
                $this->userHaveProfileImg = 0;

                $this->proImg = asset('storage/Data/global/userIcon.png');
                $this->emit('updateNavProfilePhoto', $this->proImg);
                $this->emit('refresh');

                break;
        }
    }

    // ==============================================================================

    //triggers when user changed profile photo
    public function updatedProfilePhoto()
    {
        $this->profilePhoto->storeAS('public/Data/' . $this->selectedUser->id . '/profile', 'profile.jpg'); //upload new image
        // $this->dispatchBrowserEvent('swal:UpdateSuccess');
        $this->proImg = asset('storage/Data/' . $this->selectedUser->id . '/profile/profile.jpg');
        $this->userHaveProfileImg = 1;
        $this->emit('updateNavProfilePhoto', $this->proImg);
        $this->emit('refresh');
        $this->dispatchBrowserEvent('toastr:Success');
    }



    // ==============================================================================

    public function loadData()
    {
        $this->userBranch = Branch::where('id', $this->selectedUser->branch_id)->pluck('branchName')[0];
        $this->userUnit = Unit::where('id', $this->selectedUser->unit_id)->pluck('unitName')[0];
        $this->userPost = Post::where('id', $this->selectedUser->post_id)->pluck('postName')[0];
        if (file_exists('storage/Data/' . $this->selectedUser->id . '/sign/sign.png')) {

            $this->userSign = asset('storage/Data/' . $this->selectedUser->id . '/sign/sign.png');
        } else {
            $this->userSign = asset('storage/Data/global/noSign.png');
        }


        if (file_exists('storage/Data/' . $this->selectedUser->id . '/profile/profile.jpg')) {

            $this->proImg = asset('storage/Data/' . $this->selectedUser->id . '/profile/profile.jpg');
            $this->userHaveProfileImg = 1;
        } else {
            $this->proImg = asset('storage/Data/global/userIcon.png');
            $this->userHaveProfileImg = 0;
        }
    }


    // ==============================================================================


    public function mount($selectedUser)
    {


        if ($selectedUser) {

            $this->selectedUser = User::where('id', $selectedUser)->first();
        } else {

            $this->selectedUser = Auth::user();
        }

        $this->profilePath = asset('storage/Data/' . $this->selectedUser->id . '/profile');

        $this->fName = $this->selectedUser->fName;
        $this->lName = $this->selectedUser->lName;
        $this->mobile = $this->selectedUser->mobileNumber;
        $this->telegram = $this->selectedUser->telegramNumber;
        $this->whatsapp = $this->selectedUser->whatsappNumber;
        $this->birthDate = $this->selectedUser->birthDate;
        $this->gender = $this->selectedUser->gender;
        $this->email = $this->selectedUser->email;
        $this->localNumber = $this->selectedUser->localNumber;
        $this->active = $this->selectedUser->active;
        $this->branches = Branch::pluck('branchName', 'id');
        $this->units = Unit::pluck('unitName', 'id');
        $this->posts = Post::pluck('postName', 'id');
        $this->loadData();
    }

    public function render()
    {
        return view('livewire.user.user-profile-setting');
    }
}