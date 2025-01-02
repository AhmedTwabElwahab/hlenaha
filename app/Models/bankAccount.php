<?php

namespace App\Models;

use App\Http\Requests\web\BankAccountRequest;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Bank_account
 * @package App\Models
 *
 * @property integer  $id
 * @property string   $bank_account_name_id
 * @property integer  $user_id
 * @property integer  $account_number
 * @property integer  $iban
 * @property string   $disc
 * @property integer  $is_default
 *
 * @property Driver  $driver
 * @property User    $user
 *
 *
 * @method static where(string $string, mixed $input)
 * @method static paginate(int $APP_PAGINATE)
 */
class bankAccount extends Model
{
    use HasFactory,softDeletes;
    protected $dateFormat = 'Y:m:d H:i:s';
    protected $fillable = [
        'id',
        'bank_account_name_id',
        'driver_id',
        'account_number',
        'iban',
        'disc',
        'is_default',
        'user_id'
    ];

    /**
     * @throws Exception
     */
    public static function createBankAccount(BankAccountRequest $request): bankAccount
    {
        $Bank_account = new self();

        $Bank_account->bank_account_name_id     = $request->input('bank_account_name_id');
        $Bank_account->user_id                  = $request->input('user_id') ?? auth()->id();
        $Bank_account->account_number           = $request->input('account_number');
        $Bank_account->iban                     = $request->input('iban');
        $Bank_account->disc                     = $request->input('disc');
        $Bank_account->is_default               = $request->input('is_default') ?? false;


        if (!$Bank_account->save())
        {
            throw new Exception('create_error');
        }
        return $Bank_account;
    }


    public function user(): HasOne
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function bank_name(): HasOne
    {
        return $this->hasOne(bankAccountName::class,'id','bank_account_name_id');
    }
}
