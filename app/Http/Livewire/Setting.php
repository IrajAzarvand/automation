<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Http\Livewire\Validate;


class Setting extends Component
{
    use WithFileUploads;

    public $fName, $lName, $password, $passwordConfirm, $mobile, $telegram, $whatsapp, $email;

    protected $rules = [
        'email' => 'required|email',
    ];


    public function updated($email)
    {
        $this->validateOnly($email);
    }

    public function save()
    {

        // dd(
        //     $this->fName,
        //     $this->lName,
        //     $this->mobile,
        //     $this->telegram,
        //     $this->whatsapp,
        //     $this->email,
        //     $this->password,
        //     $this->passwordConfirm
        // );
        $this->validate();

        dd('validation pass');
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
        return view('livewire.setting')->extends('layouts.DashboardLayout');
    }
}
