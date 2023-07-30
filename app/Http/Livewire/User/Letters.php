<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Letters extends Component
{
    public function render()
    {
        return view('livewire.user.letters')->extends('layouts.DashboardLayout')->section('contents');
    }
}
