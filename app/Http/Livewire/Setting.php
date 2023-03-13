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

    public $profilePath, $profilePhoto/*when user upload new profile photo, this will get the image*/,
        $proImg/*every time user go to setting page, the profile image shown to user by this variable*/,
        $dataPath/*all users data will save in this path*/,
        $fName, $lName, $password, $passwordConfirm,
        $mobile, $telegram, $whatsapp, $email;

    protected $listeners = [
        'refresh-page' => '$refresh',
        'getProfPhoto' => 'getProfilePhoto',
    ];



    //triggers when user changed profile photo
    public function updatedProfilePhoto()
    {
        // dd($this->profilePhoto);
        $this->profilePhoto->storeAS($this->profilePath, 'profile.jpg');
        $this->emit('getProfPhoto');

        // unlink($this->profilePhoto->path());
        $this->emit('refresh-page');
    }

    public function getProfilePhoto()
    {
        $this->proImg = asset('storage/Data/' .  User()['Id'] . '/profile/profile.jpg');
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
        $this->dataPath = 'public/Data/';
        $this->proImg = asset('storage/Data/' .  User()['Id'] . '/profile/profile.jpg');
    }



    public function render()
    {
        return view('livewire.setting')->extends('layouts.DashboardLayout');
    }
}
