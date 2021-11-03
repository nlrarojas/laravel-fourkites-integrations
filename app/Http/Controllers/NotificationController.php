<?php

namespace App\Http\Controllers;

use App\Notifications\NotificationTester;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller
{
    /**
     * Sends notification to PagerDuty
     */
    public function sendNotification()
    {
        $notificationTester = new NotificationTester();
        Notification::route('PagerDuty', $notificationTester->routeNotificationForPagerDuty())->notify($notificationTester);

        return view('welcome');
    }
}
