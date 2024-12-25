<?php

namespace App\Models;

use App\Http\Requests\Api\BankAccountRequest;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Bank_account
 * @package App\Models
 *
 * @property integer  $id
 * @property string   $account_name
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
    use HasFactory;
    protected $dateFormat = 'Y:m:d H:i:s';
    protected $fillable = [
        'id',
        'account_name',
        'driver_id',
        'account_number',
        'iban',
        'disc',
        'is_default',

    ];

    /**
     * @throws Exception
     */
    public static function createBankAccount(BankAccountRequest $request): bankAccount
    {
        $Bank_account = new self();

        $Bank_account->account_name     = $request->input('account_name');
        $Bank_account->user_id          = $request->input('user_id');
        $Bank_account->account_number   = $request->input('account_number');
        $Bank_account->iban             = $request->input('iban');
        $Bank_account->disc             = $request->input('disc');
        $Bank_account->is_default       = $request->input('is_default');


        if (!$Bank_account->save())
        {
            throw new Exception('create_error');
        }
        return $Bank_account;
    }



    public function user(): HasOne
    {
        return $this->hasOne('user_id',User::class,'id');
    }
}
