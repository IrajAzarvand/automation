<?php

namespace App\Http\Livewire;

use App\Models\Branch;
use App\Models\Post;
use App\Models\Unit;
use App\Models\User;
use Livewire\Component;

class UserManagement extends Component
{
    public $allSystemUsers;
    public $branches;
    public $units;
    public $posts;

    public function mount()
    {
        $this->allSystemUsers = User::where('personnelCode', '!=', '0000')->get();
        $this->branches = Branch::all();
        $this->units = Unit::all();
        $this->posts = Post::all();
    }


    public function render()
    {
        return view('livewire.user-management')->extends('layouts.DashboardLayout');
    }
}
