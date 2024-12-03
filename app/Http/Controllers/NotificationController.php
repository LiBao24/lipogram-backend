<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index($userId)
    {
        $notifications = Notification::where('id_user', $userId)->get();
        return response()->json(['notifications' => $notifications]);
    }
}
