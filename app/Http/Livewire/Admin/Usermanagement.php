<?php

namespace App\Http\Livewire\Admin;

use App\Models\Branch;
use App\Models\Post;
use App\Models\Unit;
use App\Models\User;
use Livewire\Component;

class Usermanagement extends Component
{
    public $allSystemUsers, $activeUsers = 0, $onlineUsers = 0, $userProfileImage;

    // public function editUser($userId)
    // {

    //     $this->emit('Admin.EditUserInfo', 'editSelectedUser', $userId);

    // }

    public function mount()
    {

        //prevent the users to see the users list, just the system admin allowed to visit this page
        if (User()['Id'] != 1) {
            return to_route('accessDenied');
        }

        $this->allSystemUsers = User::where('personnelCode', '!=', '0000')->get();
        foreach ($this->allSystemUsers as $user) {
            $user['branchName'] = Branch::where('id', $user->branch_id)->pluck('branchName')[0];
            $user['unitName'] = Unit::where('id', $user->unit_id)->pluck('unitName')[0];
            $user['postName'] = Post::where('id', $user->post_id)->pluck('postName')[0];

            if ($user->status) {$this->onlineUsers++;}
            if ($user->active) {$this->activeUsers++;}
            if (file_exists('storage/Data/' . $user->id . '/profile/profile.jpg')) {
                $user['userProfileImage'] = asset('storage/Data/' . $user->id . '/profile/profile.jpg');
            } else {
                $user['userProfileImage'] = asset('storage/Data/global/userIcon.png');
            }

        }
    }

    public function render()
    {
        return view('livewire.admin.usermanagement')->extends('layouts.DashboardLayout')->section('contents');
    }
}