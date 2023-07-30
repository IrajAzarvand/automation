<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Letters extends Component
{


    public function selectedFolder($folderName)
    {
        dd($folderName);
    }
    public function render()
    {
        return view('livewire.user.letters')->extends('layouts.DashboardLayout')->section('contents');
    }
}
