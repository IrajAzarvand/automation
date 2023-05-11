<?php

namespace App\Http\Livewire;

use Livewire\Component;


use Livewire\WithFileUploads;
use App\Http\Livewire\Notifications;

use Illuminate\Support\Facades\Storage;


class ProfilePhoto extends Component
{
    use WithFileUploads;



    public $profilePath, $profilePhoto, $proImg;

    //triggers when user changed profile photo
    public function updatedProfilePhoto()
    {
        $this->profilePhoto->storeAS($this->profilePath, 'profile.jpg'); //worked
        // $this->dispatchBrowserEvent('swal:UpdateSuccess');
        $this->dispatchBrowserEvent('toastr:Success');
    }

    public function mount()
    {
        $this->profilePath = 'public/Data/' .  User()['Id'] . '/profile';
        if (file_exists('storage/Data/' .  User()['Id'] . '/profile/profile.jpg'))
        {
            $this->proImg = User()['Profile_Photo'];
        }
        else{
            $this->proImg =asset('storage/Data/global/userIcon.png');
        }


    }

    public function render()
    {
        return view('livewire.profile-photo');
    }
}
