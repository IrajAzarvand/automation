<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Unit;
use App\Models\User;
use App\Models\Branch;
use Livewire\Component;
use Illuminate\Http\Request;

class UserManagement extends Component
{
    public $allSystemUsers;
    public $branches;
    public $units;
    public $posts;

    public $fName, $lName, $birthDate, $mobile, $telegram, $whatsapp, $email, $personnelCode, $localNumber, $branch, $unit, $post;
    protected $listeners = [
        'FileUploadedSuccessfully',
        'FailToUploadFile',
    ];


    protected $rules = [
        'fName' => 'required',
        'lName' => 'required',
        // 'email' => 'nullable|email',
        // 'password' => 'nullable|confirmed',
        // 'password_confirmation' => 'nullable|same:password',
        // 'mobile' => 'nullable|numeric',
        // 'telegram' => 'nullable|numeric',
        // 'whatsapp' => 'nullable|numeric',
    ];
    protected $messages = [
        'fName.required' => 'نام کاربر وارد نشده است',
        'lName.required' => 'نام خانوادگی کاربر وارد نشده است',
        // 'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'فرمت آدرس ایمیل اشتباه است',
        // 'password.required' => 'فیلد رمز عبور نمی تواند خالی باشد',
        'password.confirmed' => 'پسورد و تکرار پسورد یکسان نیست',
        'password_confirmation.required' => 'فیلد تکرار عبور نمی تواند خالی باشد',
        'password_confirmation.same' => 'پسورد و تکرار پسورد یکسان نیست',
        'mobile.numeric' => 'فرمت شماره تلفن صحیح نیست',
        'telegram.numeric' => 'فرمت شماره تلگرام صحیح نیست',
        'whatsapp.numeric' => 'فرمت شماره واتساپ صحیح نیست',
    ];


    public function FileUploadedSuccessfully()
    {
        $this->dispatchBrowserEvent('toastr:Success');
    }
    public function FailToUploadFile()
    {
        $this->dispatchBrowserEvent('toastr:Error');
    }


    public function save()
    {

    }


    public function addNewUser()
    {
        dd($this->fName, $this->lName, $this->birthDate, $this->mobile, $this->telegram, $this->whatsapp, $this->email, $this->personnelCode, $this->localNumber, $this->branch, $this->unit, $this->post);

        $this->validate();

        // if ($this->password) {
        //     User::where('id', User()['Id'])->update([
        //         'mobileNumber' => $this->mobile,
        //         'telegramNumber' => $this->telegram,
        //         'whatsappNumber' => $this->whatsapp,
        //         'email' => $this->email,
        //         'password' => Hash::make($this->password),
        //     ]);
        // } else {
        //     User::where('id', User()['Id'])->update([
        //         'mobileNumber' => $this->mobile,
        //         'telegramNumber' => $this->telegram,
        //         'whatsappNumber' => $this->whatsapp,
        //         'email' => $this->email,
        //     ]);
        // }

        // $this->dispatchBrowserEvent('swal:UpdateSuccess');


    }
    public function mount()
    {
        $this->allSystemUsers = User::where('personnelCode', '!=', '0000')->get();
        $this->branches = Branch::all();
        $this->units = Unit::all();
        $this->posts = Post::all();
    }


    public function render()
    {
        return view('livewire.user-management')->extends('layouts.DashboardLayout');
    }
}
