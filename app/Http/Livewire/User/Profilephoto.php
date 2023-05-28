<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Http\Livewire\Notifications;

use Illuminate\Support\Facades\Storage;

class Profilephoto extends Component
{
    // protected $listeners=['selectedUser'];

    use WithFileUploads;



    public $profilePath, $profilePhoto, $proImg,
    $selectedUser; //filled from UserProfileSetting

    //triggers when user changed profile photo
    public function updatedProfilePhoto()
    {
        $this->profilePhoto->storeAS($this->profilePath, 'profile.jpg'); //worked
        // $this->dispatchBrowserEvent('swal:UpdateSuccess');
        $this->dispatchBrowserEvent('toastr:Success');
    }

    public function mount($selectedUser)
    {
        $this->selectedUser=$selectedUser;
        $this->profilePath = 'public/Data/' .  $this->selectedUser->id . '/profile';
        if (file_exists('storage/Data/' . $this->selectedUser->id . '/profile/profile.jpg'))
        {
            $this->proImg = asset('storage/Data/' . $this->selectedUser->id . '/profile/profile.jpg');


        }
        else{
            $this->proImg =asset('storage/Data/global/userIcon.png');
        }


    }


    public function render()
    {
        return view('livewire.user.profilephoto');
    }
}
