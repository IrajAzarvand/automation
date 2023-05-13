<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserManagement extends Component
{
    protected $listeners=['RefreshUsersList'];

    public $allSystemUsers;


    public function RefreshUsersList()
    {
        $this->mount();

    }

    public function mount()
    {
        $this->allSystemUsers = User::where('personnelCode', '!=', '0000')->get();

    }

    public function render()
    {
        return view('livewire.user-management')->extends('layouts.DashboardLayout');
    }
}
