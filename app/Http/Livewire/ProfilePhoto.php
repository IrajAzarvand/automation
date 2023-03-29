<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

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

        $this->proImg = User()['Profile_Photo'];
    }

    public function render()
    {
        return view('livewire.profile-photo');
    }
}
