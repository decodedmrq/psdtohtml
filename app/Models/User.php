<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    const MALE = 1;
    const FEMALE = 0;

    const TYPE_FREE = 0;
    const TYPE_PREMIUM = 1;

    const ROLE_MEMBER = 0;
    const ROLE_ADMIN = 1;
    const ROLE_CONTENT_MANAGER = 2;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $guarded = ['id'];

    /**
     * @param int $role
     * @return bool
     */
    public function hasRole(int $role): bool
    {
        if ($this->role === User::ROLE_ADMIN) {
            return true;
        }

        return $this->role === $role;
    }

}
