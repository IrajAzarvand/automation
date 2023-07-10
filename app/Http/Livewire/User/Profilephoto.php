<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

use App\Http\Livewire\Notifications;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Profilephoto extends Component
{
    protected $listeners = ['updateNavProfilePhoto'];


    public $profilePath, $profilePhoto, $proImg,
        $selectedUser; //filled from UserProfileSetting




    public function updateNavProfilePhoto($photo)
    {
        $this->proImg = $photo;
        $this->emit('refresh');
    }

    public function mount()
    {
        if ($this->selectedUser) {

            $this->selectedUser = User::where('id', $this->selectedUser)->first();
            // dd($this->selectedUser);
        } else {

            $this->selectedUser = Auth::user();
        }

        if (file_exists('storage/Data/' . $this->selectedUser->id . '/profile/profile.jpg')) {
            $this->proImg = asset('storage/Data/' . $this->selectedUser->id . '/profile/profile.jpg');
        } else {
            $this->proImg = asset('storage/Data/global/userIcon.png');
        }
    }


    public function render()
    {
        return view('livewire.user.profilephoto');
    }
}