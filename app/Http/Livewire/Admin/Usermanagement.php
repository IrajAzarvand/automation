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

        $this->allSystemUsers = User::where('personnelCode', '!=', '0000')->with(['branch','unit','post'])->get();
        foreach ($this->allSystemUsers as $user) {
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
