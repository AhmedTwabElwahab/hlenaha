<?php

namespace App\Models;

use App\Http\Requests\web\TripRequest;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;

/**
 * Class trip
 * @package App\Models
 *
 * @property integer  $id
 * @property integer  $driver_id
 * @property string   $car_id
 * @property integer  $status
 * @property string   $date_start
 * @property integer  $kilo_start
 * @property string   $date_end
 * @property integer  $kilo_end
 *
 * @property User    $user
 * @property Transaction[]  $transactions
 *
 * @method static where(string $string, mixed $input)
 * @method static paginate(int $APP_PAGINATE)
 */
class trip extends Model
{
    use HasFactory;


    /**
     * @throws Exception
     */
    public static function createTrip(TripRequest $request): trip
    {
        $trip = new self();

        $trip->driver_id            = $request->input('driver_id');
        $trip->car_id               = $request->input('car_id');
        $trip->status               = $request->input('status') == null ? 0 : $request->input('status');
        $trip->date_start           = $request->input('date_start');
        $trip->kilo_start           = $request->input('kilo_start');
        $trip->date_end             = $request->input('date_end');
        $trip->kilo_end             = $request->input('kilo_end');


        if (!$trip->save())
        {
            throw new Exception('create_error');
        }
        return $trip;

    }

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }

    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }
}
