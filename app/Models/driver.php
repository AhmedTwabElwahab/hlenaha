<?php

namespace App\Models;

use App\Http\Requests\Api\DriverRequest;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Driver
 * @package App\Models
 *
 * @property integer  $id
 * @property string   $name
 * @property integer  $id_number
 * @property string   $phone
 * @property string   $country
 * @property string   $city
 * @property string   $district
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
    use HasFactory;

    use HasFactory;
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

    /**
     * @throws Exception
     */
    public static function createDriver(DriverRequest $request): Driver
    {
        $Driver = new self();

        $Driver->name               = $request->input('name');
        $Driver->id_number          = $request->input('id_number');
        $Driver->phone              = $request->input('phone');
        $Driver->country            = $request->input('country');
        $Driver->city               = $request->input('city');
        $Driver->district           = $request->input('district');
        $Driver->street             = $request->input('street');
        $Driver->building_number    = $request->input('building_number');
        $Driver->postal_code        = $request->input('postal_code');
        $Driver->balance            = $request->input('balance');
        $Driver->user_id            = $request->input('user_id');
        $Driver->status             = $request->input('status');

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
    private function updateDriver(DriverRequest $request, int $driver): Driver
    {
        $Driver = Driver::where('id', $driver)->first();

        $Driver->name               = $request->input('name');
        $Driver->id_number          = $request->input('id_number');
        $Driver->phone              = $request->input('phone');
        $Driver->country            = $request->input('country');
        $Driver->city               = $request->input('city');
        $Driver->district           = $request->input('district');
        $Driver->street             = $request->input('street');
        $Driver->building_number    = $request->input('building_number');
        $Driver->postal_code        = $request->input('postal_code');
        $Driver->balance            = $request->input('balance');
        $Driver->user_id            = $request->input('user_id');
        $Driver->status             = $request->input('status');

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
