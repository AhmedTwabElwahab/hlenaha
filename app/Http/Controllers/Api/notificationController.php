<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class notificationController extends BaseController
{
    public function index()
    {
        $notifications = auth()->user()->notifications;
        return $this->sendResponse($notifications->toArray(),'Notifications retrieved successfully.');
    }

    public function unreadNotifications()
    {
        $notifications = auth()->user()->unreadNotifications;
        return $this->sendResponse($notifications->toArray(),'Notifications retrieved successfully.');
    }

    public function read(Request $request)
    {
        auth()->user()->notifications->markAsRead();
        return $this->sendResponse('Notifications read successfully.');
    }
}
