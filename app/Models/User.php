<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\CanResetPassword;

/**
 * Class User
 * @package App\Models
 *
 * @property integer $id
 * @property string  $name
 * @property string  $title
 * @property string  $slug
 * @property string  $email
 * @property string  $user_name
 * @property string  $password
 * @property string  $role
 *
 * RELATIONS PROPERTIES
 *
 *
 * @method static create(...$arg)
 */

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'location',
        'phone',
        'about',
        'password_confirmation',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function CreateUser(string $name,string $email,string $password,bool $active)
    {


    }

    public function isAdmin()
    {
        return $this->role === 'ROLE_ADMIN';
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function driver():HasOne
    {
        return $this->hasOne(Driver::class);
    }

}
