<?php

namespace App\Models;

use App\Http\Requests\web\DriverRequest;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Driver
 * @package App\Models
 *
 * @property integer  $id
 * @property string   $name
 * @property integer  $id_number
 * @property string   $phone
 * @property string   $province
 * @property string   $city
 * @property string   $neighborhood
 * @property string   $street
 * @property integer  $building_number
 * @property integer  $postal_code
 * @property string   $image
 * @property string   $national_address_image
 * @property integer  $balance
 * @property integer  $user_id
 * @property integer  $status
 *
 * @property User    $user
 * @property Transaction[]  $transactions
 *
 * @method static where(string $string, mixed $input)
 * @method static paginate(int $APP_PAGINATE)
 */
class driver extends Model
{
    use HasFactory,SoftDeletes;

    protected $dateFormat = 'Y:m:d H:i:s';
    protected $fillable = [
        'id',
        'name',
        'id_number',
        'phone',
        'address',
        'balance',
        'user_id',
    ];

    protected $data = [
        'deleted_at'
    ];

    /**
     * @throws Exception
     */
    public static function createDriver(DriverRequest $request,$user_id): Driver
    {
        $Driver = new self();

        $Driver->name               = $request->input('name');
        $Driver->id_number          = $request->input('id_number');
        $Driver->province           = $request->input('province')?? null;
        $Driver->city               = $request->input('city')?? null;
        $Driver->neighborhood       = $request->input('neighborhood')?? null;
        $Driver->street             = $request->input('street')?? null;
        $Driver->building_number    = $request->input('building_number')?? null;
        $Driver->postal_code        = $request->input('postal_code')?? null;
        $Driver->balance            = $request->input('balance') ?? 0;
        $Driver->user_id            = $request->input('user_id') ?? $user_id;
        $Driver->status             = $request->input('status') ?? 0;

        if($request->file('image'))
        {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->extension();
            $file->move(public_path(DRIVER_IMAGES_FOLDER), $fileName);
            $Driver->image = DRIVER_IMAGES_FOLDER.DS.$fileName;
        }
        if($request->file('national_address_image'))
        {
            $file = $request->file('national_address_image');
            $fileName = time() . '.' . $file->extension();
            $file->move(public_path(DRIVER_IMAGES_FOLDER), $fileName);
            $Driver->national_address_image = DRIVER_IMAGES_FOLDER.DS.$fileName;
        }

        if (!$Driver->save())
        {
            throw new Exception('create_error');
        }
        return $Driver;
    }

    /**
     * @throws Exception
     */
    public static function updateDriver(DriverRequest $request, int $driver): Driver
    {
        $Driver = Driver::where('id', $driver)->first();
        $Driver->name               = $request->input('name') ?? $Driver->name;
        $Driver->id_number          = $request->input('id_number') ?? $Driver->id_number;
        $Driver->province           = $request->input('province') ?? $Driver->province;
        $Driver->city               = $request->input('city') ?? $Driver->city;
        $Driver->neighborhood       = $request->input('neighborhood') ?? $Driver->neighborhood;
        $Driver->street             = $request->input('street') ?? $Driver->street;
        $Driver->building_number    = $request->input('building_number') ?? $Driver->building_number;
        $Driver->postal_code        = $request->input('postal_code') ?? $Driver->postal_code;
        $Driver->balance            = $request->input('balance') ?? $Driver->balance;
        $Driver->user_id            = $request->input('user_id') ?? $Driver->user_id;
        $Driver->status             = $request->input('status') == null ? 0 : 1;


        if($request->file('image'))
        {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->extension();
            $file->move(public_path(DRIVER_IMAGES_FOLDER), $fileName);
            $Driver->image = DRIVER_IMAGES_FOLDER.DS.$fileName;
        }
        if($request->file('national_address_image'))
        {
            $file = $request->file('national_address_image');
            $fileName = time() . '.' . $file->extension();
            $file->move(public_path(DRIVER_IMAGES_FOLDER), $fileName);
            $Driver->national_address_image = DRIVER_IMAGES_FOLDER.DS.$fileName;
        }

        $Driver->updated_at = Carbon::now();

        if (!$Driver->update())
        {
            throw new Exception('update_error');
        }
        return $Driver;
    }

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany('transaction',Transaction::class,'driver_id');
    }
}
