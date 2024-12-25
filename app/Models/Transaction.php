<?php

namespace App\Models;

use App\Http\Requests\web\TransactionRequest;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Transaction
 * @package App\Models
 *
 * @property integer  $id
 * @property integer  $bank_account_id
 * @property integer  $driver_id
 * @property integer  $amount
 * @property string   $description
 * @property string   $date
 * @property string   $updated_at
 *
 *
 * @property bankAccount  $bankAccount
 * @property Driver       $driver

 *
 * @method static where(string $string, mixed $input)
 * @method static paginate(int $APP_PAGINATE)
 */
class Transaction extends Model
{
    use HasFactory;
    protected $dateFormat = 'Y:m:d H:i:s';
    protected $fillable = [
        'id',
        'bank_account_id',
        'driver_id',
        'amount',
        'description',
        'date',

    ];

    /**
     * @throws Exception
     */
    public static function createTransaction(TransactionRequest $request): Transaction
    {
        $Transaction = new self();

        $Transaction->id                    = $request->input('id');
        $Transaction->bank_account_id       = $request->input('bank_account_id');
        $Transaction->driver_id             = $request->input('driver_id');
        $Transaction->amount                = $request->input('amount');
        $Transaction->description           = $request->input('description');
        $Transaction->date                  = $request->input('date');


        if (!$Transaction->save())
        {
            throw new Exception('create_error');
        }
        return $Transaction;
    }


    public function bankAccount(): HasOne
    {
        return $this->hasOne('bank_account_id',bankAccount::class,'id');
    }

    public function driver(): HasOne
    {
        return $this->hasOne('driver_id',Driver::class,'id');
    }
}
