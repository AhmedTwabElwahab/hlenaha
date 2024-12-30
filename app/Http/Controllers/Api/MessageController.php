<?php

namespace App\Http\Controllers\Api;

use App\Models\Message;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends BaseController
{
    public function show()
    {
        $messages = Message::where([
            ['sender_id','=',1],
            ['receiver_id','=',auth()->user()->id]
        ])->orWhere([
            ['sender_id','=',auth()->user()->id],
            ['receiver_id','=',1]
        ])->get();

        return $this->sendResponse($messages,'all messages');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try
        {
            $msg = Message::createMessage(
                $request->input('sender_id') ?? auth()->user()->id,
                $request->input('receiver_id') ?? 1,
                $request->input('Message')
            );

            DB::commit();
            return $this->sendResponse($msg,'message sent');
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return $this->failed($message);
        }
    }
}
