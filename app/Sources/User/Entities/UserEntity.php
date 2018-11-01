<?php

namespace App\Sources\User\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserEntity extends Authenticatable
{
    use Notifiable;

    /**
     * The table name.
     *
     * @var array
     */
    protected $table = "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name", "email", "password",
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        "password", "remember_token",
    ];

    public function scopeIsActive($query)
    {
        $query->whereStatus(\UserStatus::ACTIVE);
    }

    public function scopeIsNonActive($query)
    {
        $query->whereStatus(\UserStatus::NON_ACTIVE);
    }

    public function scopeIsUnverified($query)
    {
        $query->whereStatus(\UserStatus::UNVERIFIED);
    }

    public function scopeIsBanned($query)
    {
        $query->whereStatus(\UserStatus::BANNED);
    }

    public function scopeIsSuperadmin($query)
    {
        $query->whereRole(\UserRole::SUPERADMIN);
    }

    public function scopeIsAdmin($query)
    {
        $query->whereRole(\UserRole::ADMIN);
    }

    public function scopeIsOperator($query)
    {
        $query->whereRole(\UserRole::OPERATOR);
    }

    public function scopeIsGuest($query)
    {
        $query->whereRole(\UserRole::GUEST);
    }
}
