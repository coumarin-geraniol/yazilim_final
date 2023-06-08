<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    const ROLE_BUYER = 1;
    const ROLE_SELLER = 2;
    const ROLE_ADMIN = 3;

    protected $table = 'users';
    protected $guarded = false;

    static function getRoles()
    {
        return [
            self::ROLE_BUYER => 'Müşteri',
            self::ROLE_SELLER => 'Tedarikçi',
            self::ROLE_ADMIN => 'Admin',
        ];
    }

    public function getRoleTitleAttribute()
    {

        $roles = self::getRoles();
        return array_key_exists($this->role, $roles) ? $roles[$this->role] : null;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
         'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
