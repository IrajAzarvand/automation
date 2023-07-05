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
    // protected $listeners=['selectedUser'];

    use WithFileUploads;

    protected $listeners = [
        'ItemRemoveConfirmed',
        'refresh'=>'$refresh',
    ];


    public $profilePath, $profilePhoto, $proImg,
        $userHaveProfileImg, //if user set a profile picture, the remove buttom will show to him, otherwise the button will hide
        $selectedUser; //filled from UserProfileSetting

    //triggers when user changed profile photo
    public function updatedProfilePhoto()
    {
        $this->profilePhoto->storeAS($this->profilePath, 'profile.jpg');
        // $this->dispatchBrowserEvent('swal:UpdateSuccess');
        $this->dispatchBrowserEvent('toastr:Success');
        $this->emit('refresh');
    }




    //triggers when user click remove profile photo button
    //this is a global function to get confirm from user to remove any kind of information.
    // the item that user wants to remove will be sent to itemremoveconfirmed function
    // and that function will remove the user selected item
    public function confirmDelete($itemName)
    {
        $this->dispatchBrowserEvent('swal:itemDelConfirm',[
            'itemName'=>$itemName,
            'callback' => 'ItemRemoveConfirmed',
        ]);

    }

//this function will trigger after user accept to remove the selected item
// the item name will catch from confirmDelete function
    public function ItemRemoveConfirmed($itemName)
    {

        switch ($itemName[0]) {
            case 'profileImage':
                unlink('storage/Data/' . $this->selectedUser->id . '/profile/profile.jpg');
                $this->userHaveProfileImg=0;
                $this->dispatchBrowserEvent('toastr:Success');
                $this->proImg = asset('storage/Data/global/userIcon.png');
                $this->emit('refresh');

                break;

        }
    }


    public function mount()
    {
        if ($this->selectedUser) {

            $this->selectedUser = User::where('id', $this->selectedUser)->first();
            // dd($this->selectedUser);
        } else {

            $this->selectedUser = Auth::user();
        }

        // $this->selectedUser = $selectedUser;
        $this->profilePath = 'public/Data/' .  $this->selectedUser->id . '/profile';
        if (file_exists('storage/Data/' . $this->selectedUser->id . '/profile/profile.jpg')) {
            $this->proImg = asset('storage/Data/' . $this->selectedUser->id . '/profile/profile.jpg');
            $this->userHaveProfileImg = 1;
        } else {
            $this->proImg = asset('storage/Data/global/userIcon.png');
            $this->userHaveProfileImg = 0;
        }
    }


    public function render()
    {
        return view('livewire.user.profilephoto');
    }
}