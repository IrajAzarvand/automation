<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'post_id',
        'parentMenuId',
        'menuItem',
        'menuIcon',
        'menuLink',
    ];

    public function childs()
    {
        return $this->hasMany(Menu::class, 'parentMenuId', 'id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
