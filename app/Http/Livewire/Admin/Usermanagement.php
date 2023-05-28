<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;


class Usermanagement extends Component
{
    public $allSystemUsers;


    public function editUser($userId)
    {


        $this->emit('Admin.EditUserInfo','editSelectedUser',$userId);

    }

    public function mount()
    {
        $this->allSystemUsers = User::where('personnelCode', '!=', '0000')->get();
    }


    public function render()
    {
        return view('livewire.admin.usermanagement');
    }
}
