<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\BaseController;
use App\Models\Message;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends BaseController
{
    public function index()
    {
        $users = User::all();
        $messages = null;
        return view('messages.index', compact('users','messages'));
    }

    public function show(User $web_user)
    {
        $users = User::all();
        $messages = Message::where([
            ['sender_id','=',$web_user->id],
            ['receiver_id','=',auth()->user()->id]
        ])->orWhere([
            ['sender_id','=',auth()->user()->id],
            ['receiver_id','=',$web_user->id]
        ])->get();


        return view('messages.index', compact('web_user','users','messages'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try
        {
            $msg = Message::createMessage(
                $request->input('sender_id') ?? 1,
                $request->input('receiver_id'),
                $request->input('Message')
            );

            DB::commit();
            return $msg;
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return redirect()->back()->withErrors([$message]);
        }
    }
}
