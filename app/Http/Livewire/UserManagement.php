<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Unit;
use App\Models\User;
use App\Models\Branch;
use Livewire\Component;
use Illuminate\Http\Request;

class UserManagement extends Component
{
    public $allSystemUsers;
    public $branches;
    public $units;
    public $posts;

    public $fName, $lName, $mobile, $telegram, $whatsapp, $email, $personnelCode, $localNumber, $branch, $unit, $post;

    public function addNewUser()
    {
        dd($this->fName, $this->lName, $this->mobile, $this->telegram, $this->whatsapp, $this->email, $this->personnelCode, $this->localNumber, $this->branch, $this->unit, $this->post);
    }
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
