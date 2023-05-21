<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Http\Livewire\Validate;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserProfileSetting extends Component
{

    use WithFileUploads;

    public $fName, $lName, $password, $password_confirmation, $mobile, $telegram, $whatsapp, $email, $localNumber;

    protected $rules = [
        'email' => 'nullable|email',
        // 'fName' => 'required',
        // 'lName' => 'required',
        'password' => 'nullable|confirmed',
        'password_confirmation' => 'nullable|same:password',
        'mobile' => 'nullable|numeric',
        'telegram' => 'nullable|numeric',
        'whatsapp' => 'nullable|numeric',
        'localNumber' => 'nullable|numeric',
    ];
    protected $messages = [
        // 'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'فرمت آدرس ایمیل اشتباه است',
        // 'password.required' => 'فیلد رمز عبور نمی تواند خالی باشد',
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

        $selectedUser=User::where('id', User()['Id']);
        if ($this->password) {
            $selectedUser->update([
                'password' => Hash::make($this->password),
            ]);
        }

        $selectedUser->update([
                    'mobileNumber' => $this->mobile,
                    'telegramNumber' => $this->telegram,
                    'whatsappNumber' => $this->whatsapp,
                    'email' => $this->email,
                    'localNumber' => $this->localNumber,
                ]);

        $this->dispatchBrowserEvent('swal:UpdateSuccess');
    }


    public function mount()
    {
        $this->fName = User()['First_Name'];
        $this->lName = User()['Last_Name'];
        $this->mobile = User()['Mobile'];
        $this->telegram = User()['Telegram'];
        $this->whatsapp = User()['Whatsapp'];
        $this->email = User()['email'];
    }




    public function render()
    {
        return view('livewire.user.user-profile-setting');
    }
}
