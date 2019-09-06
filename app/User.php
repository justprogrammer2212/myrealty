<?php

namespace App;

use App\Models\Offer;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class User extends Authenticatable implements HasMedia
{
    use HasMediaTrait;
    use Notifiable;
    const ROLE_ADMIN = 'Admin';
    const ROLE_REALTOR = 'Realtor';
    const ROLE_USER = 'User';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function offers() {
        return $this->hasMany(Offer::class, 'realtor_id');
    }
    public function getAvatarUrl() {
        return $this->getFirstMedia('Avatar') ? $this->getFirstMediaUrl('Avatar') : asset('images/user_profile.png');
    }
}
