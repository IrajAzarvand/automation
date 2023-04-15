<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserManagement extends Component
{
    public $allSystemUsers;


    public function mount()
    {
        $this->allSystemUsers = User::where('personnelCode', '!=', '0000')->get();
//        dd($this->allSystemUsers);


    }


    public function render()
    {
        return view('livewire.user-management')->extends('layouts.DashboardLayout');
    }
}
