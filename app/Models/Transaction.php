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
 * @property integer  $driver_bank_account_id
 * @property integer  $driver_id
 * @property integer  $amount
 * @property integer  $fees
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

        $seem = $request->input('bank_account_id') === $request->input('driver_bank_account_id');

        $Transaction->id                    = $request->input('id');
        $Transaction->bank_account_id       = $request->input('bank_account_id');
        $Transaction->driver_bank_account_id       = $request->input('driver_bank_account_id');
        $Transaction->driver_id             = $request->input('driver_id');
        $Transaction->amount                = $request->input('amount');
        $Transaction->fees                  = $seem ? 0 : 5 ;
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
        return $this->hasOne(bankAccount::class,'id','driver_bank_account_id');
    }

    public function ourBankAccount(): HasOne
    {
        return $this->hasOne(bankAccount::class,'id','bank_account_id');
    }

    public function driver(): HasOne
    {
        return $this->hasOne(Driver::class,'id','driver_id');
    }
}
