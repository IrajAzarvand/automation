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

    protected $listeners = ['editSelectedUser', 'changeModeConfirmed', 'refresh' => '$refresh',];

    public $fName, $lName, $password, $password_confirmation, $mobile, $telegram, $whatsapp, $email, $localNumber,
        $userBranch, $userUnit, $userPost, $branches, $units, $posts,
        $selectedUser, $active; //this is for detect if admin select a user to modify the profile or no.



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
            if(!is_numeric($this->userBranch))
            {
                $this->userBranch=Branch::where('branchName',$this->userBranch)->pluck('id')[0];
            }
            if(!is_numeric($this->userUnit))
            {
                $this->userUnit=Unit::where('unitName',$this->userUnit)->pluck('id')[0];
            }
            if(!is_numeric($this->userPost))
            {
                $this->userPost=Post::where('postName',$this->userPost)->pluck('id')[0];
            }
            $this->selectedUser->update([
                'fName' => $this->fName,
                'lName' => $this->lName,
                'branch_id'=>$this->userBranch,
                'unit_id'=>$this->userUnit,
                'post_id'=>$this->userPost,
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

    public function loadData()
    {
        $this->userBranch = Branch::where('id', $this->selectedUser->branch_id)->pluck('branchName')[0];
        $this->userUnit = Unit::where('id', $this->selectedUser->unit_id)->pluck('unitName')[0];
        $this->userPost = Post::where('id', $this->selectedUser->post_id)->pluck('postName')[0];

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


    public function mount()
    {


        if ($this->selectedUser) {

            $this->selectedUser = User::where('id', $this->selectedUser)->first();
            // dd($this->selectedUser);
        } else {

            $this->selectedUser = Auth::user();
        }

        $this->fName = $this->selectedUser->fName;
        $this->lName = $this->selectedUser->lName;
        $this->mobile = $this->selectedUser->mobileNumber;
        $this->telegram = $this->selectedUser->telegramNumber;
        $this->whatsapp = $this->selectedUser->whatsappNumber;
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
