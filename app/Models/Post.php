<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'postName',
    ];


    public function users()
    {
        return $this->hasMany(User::class);
    }


    public function AdminMenus()
    {
        //when the user is system adminstrator this function will get menus
        //the regular users menu fetched from helper function
        return $this->hasMany(Menu::class);
    }
}