<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'fName',
        'lName',
        'personnelCode',
        'birthDate',
        'gender',
        'mobileNumber',
        'telegramNumber',
        'whatsappNumber',
        'localNumber',
        'email',
        'email_verified_at',
        'role_id',
        'password',
        'current_team_id',
        'profile_photo',
        'status',
        'active',
        'branch_id',
        'unit_id',
        'post_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];


    public function post()
    {
        return $this->belongsTo(Post::class,'post_id');
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class,'unit_id');
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

}
