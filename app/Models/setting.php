<?php

namespace App\Models;

use App\Http\Requests\SettingRequest;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Setting
 * @package App\Models
 *
 * @property integer  $user_id
 * @property string  $key
 * @property string  $value

 *
 *

 *
 * @method static where(string $string, mixed $input)
 * @method static paginate(int $APP_PAGINATE)
 */
class setting extends Model
{
    use HasFactory;
    protected $dateFormat = 'Y:m:d H:i:s';
    protected $fillable = [
        'user_id',
        'key',
        'value',

    ];

    /**
     * @param $user_id
     * @param $key
     * @param $value
     * @return setting
     * @throws Exception
     */
    public static function createSetting($user_id,$key,$value): Setting
    {
        $Setting = new self();

        $Setting->user_id   = $user_id;
        $Setting->key       = $key;
        $Setting->value     = $value;


        if (!$Setting->save())
        {
            throw new Exception('create_error',APP_ERROR);
        }
        return $Setting;
    }


}

