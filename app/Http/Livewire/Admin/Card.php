<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Card extends Component
{
    public $allSystemUsers;

    public function mount()
    {
        $this->allSystemUsers = User::where('personnelCode', '!=', '0000')->get();

    }

    public function render()
    {
        return view('livewire.admin.card');
    }
}
