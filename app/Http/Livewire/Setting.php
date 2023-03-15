<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Setting extends Component
{
    use WithFileUploads;

    public $profilePath, $profilePhoto, $proImg, $fName, $lName, $password, $passwordConfirm, $mobile, $telegram, $whatsapp, $email;

    // public $dataPath = 'public/Data/';


    protected $listeners = [
        'refresh-page' => '$refresh',
        'getProfPhoto' => 'getProfilePhoto',
    ];



    //triggers when user changed profile photo
    public function updatedProfilePhoto()
    {
        $this->profilePhoto->storeAS($this->profilePath, 'profile.jpg'); //worked
        $this->emit('getProfPhoto');
    }

    public function getProfilePhoto()
    {
        $this->proImg = asset('storage/Data/' .  User()['Id'] . '/profile/profile.jpg');
        $this->dispatchBrowserEvent('swal:Success');
    }

    // public function save()
    // {

    //     dd($this->profilePhoto, $this->profilePhoto->path(), asset($this->profilePath . 'userprofile.jpg'));
    //     $this->validate([
    //         'profilePhoto' => 'image|max:50', // 50KB Max
    //     ]);

    //     File::move($this->profilePhoto->path(), asset($this->profilePath . 'userprofile.jpg'));

    //     $this->profilePhoto->store(asset('Data/profiles/'));
    //     // File::move($newimg->path(), $this->EventsItemPath . $Item->id . '/' . $newName);
    // }


    public function mount()
    {
        $this->profilePath = 'public/Data/' .  User()['Id'] . '/profile';
        $this->proImg = asset('storage/Data/' .  User()['Id'] . '/profile/profile.jpg');
        $this->dispatchBrowserEvent('swal:Success');
    }



    public function render()
    {
        return view('livewire.setting')->extends('layouts.DashboardLayout');
    }
}
