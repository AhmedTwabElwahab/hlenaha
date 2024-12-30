<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = ['sender_id', 'receiver_id', 'message'];

    public static function createMessage($sender_id,$receiver_id,$message): Message
    {
        $Message = new self();

        $Message->sender_id   = $sender_id;
        $Message->receiver_id = $receiver_id;
        $Message->message     = $message;
        $Message->read_at     = null;


        if (!$Message->save())
        {
            throw new Exception('create_error',APP_ERROR);
        }
        return $Message;
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'id','sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'id','receiver_id');
    }

}
