<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'id',
        'subject',
        'abstract',
        'letterBody',
        'letterNumber',
        'createDate',
        'createdUser',
        'signedUser',
        'attachments',
        'draft',
    ];

    public $incrementing = false;

    protected $primaryKey = 'id';


}
