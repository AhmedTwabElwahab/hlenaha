<?php

namespace App\Models;

use App\Http\Requests\web\CarRequest;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Car
 * @package App\Models
 *
 * @property integer  $id
 * @property string  $type
 * @property string  $brand
 * @property string  $model
 * @property string  $year
 * @property string  $color
 * @property integer  $price_day
 * @property integer  $kilo
 * @property string  $insurance
 * @property string  $insurance_expiry
 * @property string  $description
 * @property integer  $status
 *
 * @method static where(string $string, mixed $input)
 * @method static paginate(int $APP_PAGINATE)
 */
class Car extends Model
{
    use HasFactory,softDeletes;
    protected $dateFormat = 'Y:m:d H:i:s';
    protected $fillable = [
        'id',
        'type',
        'brand',
        'model',
        'year',
        'color',
        'price_day',
        'kilo',
        'insurance',
        'insurance_expiry',
        'description',
        'status',

    ];

    /**
     * @throws Exception
     */
    public static function createCar(CarRequest $request): Car
    {
        $Car = new self();

        $Car->type= $request->input('type');
        $Car->brand= $request->input('brand');
        $Car->model= $request->input('model');
        $Car->year= $request->input('year');
        $Car->color= $request->input('color');
        $Car->price_day= $request->input('price_day');
        $Car->kilo= $request->input('kilo');
        $Car->insurance= $request->input('insurance');
        $Car->insurance_expiry= $request->input('insurance_expiry');
        $Car->description= $request->input('description');
        $Car->status= $request->input('status');


        if (!$Car->save())
        {
            throw new Exception('create_error',APP_ERROR);
        }
        return $Car;
    }


}
