<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
class NotificationController extends Controller
{
    public function getNotifications()
    {
        $notification = Notification::get();

return view ('admin/dashboard',compact('notification'))  ;
  }
}
