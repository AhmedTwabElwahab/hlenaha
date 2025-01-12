<?php

namespace App\Models;

use App\Http\Requests\web\UserRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\CanResetPassword;

/**
 * Class User
 * @package App\Models
 *
 * @property integer $id
 * @property string  $name
 * @property string  $phone
 * @property string  $gender
 * @property string  $email
 * @property string  $password
 * @property string  $role
 * @property string  $birth_date
 * @property string  $updated_at
 *
 * RELATIONS PROPERTIES
 *
 *
 * @method static create(...$arg)
 */

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, softDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'birth_date',
        'phone',
        'gender',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'role',
        'api_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public static function CreateUser($request): User
    {
        $user = new User();
        $user->name             = $request->input('name');
        $user->phone            = $request->input('phone');
        $user->email            = $request->input('email');
        $user->password         = Hash::make(123456);
        $user->role             = $request->input('role') ?? USER_ROLE;

        if (!$user->save())
        {
            throw new \Exception("Failed to create user");
        }

        setting::createSetting($user->id, 'APP_lang', 'ar');
        setting::createSetting($user->id, 'APP_notifications', true);

        return $user;
    }

    public function isAdmin()
    {
        return $this->role === ADMIN_ROLE;
    }

    public function driver():HasOne
    {
        return $this->hasOne(Driver::class);
    }

    public function linkedSocialAccounts(): HasOne
    {
        return $this->hasOne(LinkedSocialAccount::class);
    }

}
