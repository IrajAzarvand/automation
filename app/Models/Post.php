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


    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}