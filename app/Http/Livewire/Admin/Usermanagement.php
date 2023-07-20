<?php

namespace App\Http\Livewire\Admin;

use App\Models\Branch;
use App\Models\Post;
use App\Models\Unit;
use App\Models\User;
use Livewire\Component;

class Usermanagement extends Component
{
    public $allSystemUsers;

    public function editUser($userId)
    {

        $this->emit('Admin.EditUserInfo', 'editSelectedUser', $userId);

    }

    public function mount()
    {
        $this->allSystemUsers = User::where('personnelCode', '!=', '0000')->get();
        foreach ($this->allSystemUsers as $user) {
            $user['branchName'] = Branch::where('id', $user->branch_id)->pluck('branchName')[0];
            $user['unitName'] = Unit::where('id', $user->unit_id)->pluck('unitName')[0];
            $user['postName'] = Post::where('id', $user->post_id)->pluck('postName')[0];
        }
        // dd($this->allSystemUsers);
    }

    public function render()
    {
        return view('livewire.admin.usermanagement')->extends('layouts.DashboardLayout')->section('contents');
    }
}