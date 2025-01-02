<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Notifications\adminNotification;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
//        $user = auth()->user();
//        $user->notify(new adminNotification($user));

//        $notifications = auth()->user()->unreadNotifications;
//        dd($notifications);

        return view('dashboard.index');
    }
}
