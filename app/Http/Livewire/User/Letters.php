<?php

namespace App\Http\Livewire\User;

use App\Models\Branch;
use Livewire\Component;

class Letters extends Component
{

    public $branchList, $activeFolder;

    //when user select one of the folders (compose, inbox, sent, draft,...) this function send the folder name
    //to LetterFolderContent page to load the selected folder letters
    public function selectedFolder($selectedFolder)
    {
        $this->activeFolder = $selectedFolder;//this will set the active class to selected folder item
        $this->emit('showSelectedFolderContent', $selectedFolder);

    }


    public function mount()
    {
        if (!$this->activeFolder) {
                $this->selectedFolder('صندوق ورودی');
        }
        $this->branchList = Branch::pluck('branchName', 'id'); //get branch list for archive lieeters
    }


    public function render()
    {
        return view('livewire.user.letters')->extends('layouts.DashboardLayout')->section('contents');
    }
}
