<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Http\Livewire\Validate;
use App\Models\Branch;
use App\Models\Post;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserProfileSetting extends Component
{

    use WithFileUploads;

    protected $listeners = ['editSelectedUser'];

    public $fName, $lName, $password, $password_confirmation, $mobile, $telegram, $whatsapp, $email, $localNumber, $branch, $unit, $post,
        $selectedUser; //this is for detect if admin select a user to modify the profile or no.

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



    public function save()
    {
        $this->validate();

        // $selectedUser = User::where('id', User()['Id']);
        if ($this->password) {
            $this->selectedUser->update([
                'password' => Hash::make($this->password),
            ]);
        }

        $this->selectedUser->update([
            'mobileNumber' => $this->mobile,
            'telegramNumber' => $this->telegram,
            'whatsappNumber' => $this->whatsapp,
            'email' => $this->email,
            'localNumber' => $this->localNumber,
        ]);

        $this->dispatchBrowserEvent('swal:UpdateSuccess');
    }



    // public function editSelectedUser($selectedUser)
    // {
    //     dd('called this function with the user id of ' . $selectedUser);
    // }


    public function mount()
    {

        if ($this->selectedUser) {

            $this->selectedUser = User::where('id', $this->selectedUser)->first();
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
        $this->branch=Branch::where('id',$this->selectedUser->branch_id)->pluck('branchName')[0];
        $this->unit=Unit::where('id',$this->selectedUser->unit_id)->pluck('unitName')[0];
        $this->post=Post::where('id',$this->selectedUser->post_id)->pluck('postName')[0];

    }




    public function render()
    {
        return view('livewire.user.user-profile-setting');
    }
}
