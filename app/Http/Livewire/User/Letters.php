<?php

namespace App\Http\Livewire\User;

use App\Models\Branch;
use Livewire\Component;

class Letters extends Component
{

    public $branchList;

    public function selectedFolder($branchName)
    {
        dd($branchName);
    }


    public function mount()
    {
        $this->branchList=Branch::pluck('branchName','id'); //get branch list for archive lieeters


}


    public function render()
    {
        return view('livewire.user.letters')->extends('layouts.DashboardLayout')->section('contents');
    }
}
