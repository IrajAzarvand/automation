<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Letters extends Component
{
    public function render()
    {
        return view('livewire.letters')->extends('layouts.DashboardLayout');
    }
}