<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\OffersNotification;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = User::first();
            $notification = [
                'greeting' => 'Hello From Rubel',
                'body' => 'You receive a new notification',
                'notificationText' => 'Confirm SignUp',
                'url' => url('/'),
                'thankYou' => 'thanks',
            ];

            $user->notify(new OffersNotification($notification));
        }
    }
}
