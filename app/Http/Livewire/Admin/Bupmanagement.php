<?php

namespace App\Http\Livewire\Admin;

use App\Models\Branch;
use App\Models\Post;
use App\Models\Unit;
use Livewire\Component;

class Bupmanagement extends Component
{

    public $branches, $units, $posts, $newBranch, $newUnit, $newPost, $selectedBranch, $selectedUnit, $selectedPost;
    protected $listeners = [
        'ItemRemoveConfirmed',
        'refresh' => '$refresh',
    ];

    protected $rules = [
        'newBranch' => 'nullable|unique:branches,branchName',
        'newUnit' => 'nullable|unique:units,unitName',
        'newPost' => 'nullable|unique:posts,postName',
    ];
    protected $messages = [
        'newBranch.unique' => 'نام شعبه قبلا وارد شده است',
        'newUnit.unique' => 'نام واحد قبلا وارد شده است',
        'newPost.unique' => 'نام پست قبلا وارد شده است',
    ];

    //========= INSERT OR EDIT SECTION ====================
    public function branchEditSave()
    {

        $this->validate();

        if ($this->selectedBranch) {
            Branch::where('id', $this->selectedBranch)->update(['branchName' => $this->newBranch]);
        } else {

            Branch::insert(['branchName' => $this->newBranch]);
        }
        $this->dispatchBrowserEvent('toastr:Success');
        $this->newBranch = '';
        $this->loadData();
    }

    public function unitEditSave()
    {
        $this->validate();
        if ($this->selectedUnit) {
            Unit::where('id', $this->selectedUnit)->update(['unitName' => $this->newUnit]);
        } else {

            Unit::insert(['unitName' => $this->newUnit]);
        }
        $this->dispatchBrowserEvent('toastr:Success');
        $this->newUnit = '';
        $this->loadData();
    }

    public function postEditSave()
    {
        $this->validate();
        if ($this->selectedPost) {
            Post::where('id', $this->selectedPost)->update(['postName' => $this->newPost]);
        } else {

            Post::insert(['postName' => $this->newPost]);
        }
        $this->dispatchBrowserEvent('toastr:Success');
        $this->newPost = '';
        $this->loadData();
    }

    //========= REMOVE SECTION ====================

    public function branchRemove()
    {
        $this->dispatchBrowserEvent('swal:itemDelConfirm', [
            'itemName' => ['branch', $this->selectedBranch],
            'callback' => 'ItemRemoveConfirmed',
        ]);
    }

    public function unitRemove()
    {
        $this->dispatchBrowserEvent('swal:itemDelConfirm', [
            'itemName' => ['unit', $this->selectedUnit],
            'callback' => 'ItemRemoveConfirmed',
        ]);
    }

    public function postRemove()
    {
        $this->dispatchBrowserEvent('swal:itemDelConfirm', [
            'itemName' => ['post', $this->selectedPost],
            'callback' => 'ItemRemoveConfirmed',
        ]);
    }

    //this function will trigger after user accept to remove the selected item
    // the item name will catch from confirmDelete function
    public function ItemRemoveConfirmed($itemName)
    {

        switch ($itemName[0][0]) {
            case 'branch':
                Branch::where('id', $itemName[0][1])->delete();
                $this->dispatchBrowserEvent('toastr:Success');
                $this->selectedBranch = '';
                $this->loadData();
                $this->emit('refresh');
                break;

            case 'unit':
                Unit::where('id', $itemName[0][1])->delete();
                $this->dispatchBrowserEvent('toastr:Success');
                $this->selectedUnit = '';
                $this->loadData();
                $this->emit('refresh');
                break;

            case 'post':
                Post::where('id', $itemName[0][1])->delete();
                $this->dispatchBrowserEvent('toastr:Success');
                $this->selectedPost = '';
                $this->loadData();
                $this->emit('refresh');
                break;

        }
    }

    //========= /.REMOVE SECTION ====================

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
        return view('livewire.admin.bupmanagement')->extends('layouts.DashboardLayout')->section('contents');
    }
}
