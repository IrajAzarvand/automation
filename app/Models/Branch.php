<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = [
        'branchName',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}