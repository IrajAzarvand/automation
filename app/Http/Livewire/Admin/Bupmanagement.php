<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use App\Models\Unit;
use App\Models\Branch;
use Livewire\Component;

class Bupmanagement extends Component
{

    public $branches, $units, $posts, $newBranch, $newUnit, $newPost, $selectedBranch, $selectedUnit, $selectedPost;
    protected $listeners = ['selectedBranch'];


    protected $rules = [
        'newBranch' => 'nullable|unique:branches,branchName',
        'newUnit' => 'nullable|unique:units,unitName',
        'newPost' => 'nullable|unique:posts,postName',
    ];
    protected $messages = [
        'newBranch.unique' => 'نام شعبه قبلا وارد است',
        'newUnit.unique' => 'نام واحد قبلا وارد است',
        'newPost.unique' => 'نام پست قبلا وارد است',
    ];

    public function insertNewBranch()
    {
        $this->validate();
        if ($this->selectedBranch) {
            Branch::where('branchName', $this->selectedBranch)->update(['branchName' => $this->newBranch]);
        } else {

            Branch::insert(['branchName' => $this->newBranch]);
        }
        $this->dispatchBrowserEvent('toastr:Success');
        $this->newBranch = '';
        $this->loadData();
    }

    public function insertNewUnit()
    {
        $this->validate();
        Unit::insert(['unitName' => $this->newUnit]);
        $this->dispatchBrowserEvent('toastr:Success');
        $this->newUnit = '';
        $this->loadData();
    }

    public function insertNewPost()
    {
        $this->validate();
        Post::insert(['postName' => $this->newPost]);
        $this->dispatchBrowserEvent('toastr:Success');
        $this->newPost = '';
        $this->loadData();
    }


    public function loadData()
    {
        $this->branches = Branch::pluck('branchName', 'id');
        $this->units = Unit::pluck('unitName', 'id');
        $this->posts = Post::pluck('postName', 'id');
    }


    public function mount()
    {
        $this->loadData();
    }
    public function render()
    {
        return view('livewire.admin.bupmanagement');
    }
}
