<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class LetterFoldersContent extends Component
{
protected $listeners=['showSelectedFolderContent'];


//when user select one of the folders in letter section (compose, inbox, sent,...)
//selected folder name will send to this function from letters component to load the related folder letters for user
    public function showSelectedFolderContent($selectedFolder)
    {

    }
    public function render()
    {
        return view('livewire.user.letter-folders-content');
    }
}
