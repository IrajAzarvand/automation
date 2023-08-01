<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class LetterFoldersContent extends Component
{
protected $listeners=['showSelectedFolderContent'];
public $selectedFolder;


//when user select one of the folders in letter section (compose, inbox, sent,...)
//selected folder name will send to this function from letters component to load the related folder letters for user
    public function showSelectedFolderContent($selectedFolder)
    {
        $this->selectedFolder=$selectedFolder;


    }

    public function mount($selectedFolder='')
    {
        //set initial loading of the page to inbox
        if (!$selectedFolder) {
            $this->selectedFolder='صندوق ورودی';
        }
    }
    public function render()
    {
        return view('livewire.user.letter-folders-content');
    }
}
