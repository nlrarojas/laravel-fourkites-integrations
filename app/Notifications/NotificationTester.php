<?php namespace App\Notifications;

/**
 * Key of service created in PagerDuty u+e3AJxxYNv-4y5shybw
 */

use NotificationChannels\PagerDuty\PagerDutyChannel;
use NotificationChannels\PagerDuty\PagerDutyMessage;
use Illuminate\Notifications\Notification;

class NotificationTester extends Notification
{
    public function via($notifiable = null): array
    {
        return [PagerDutyChannel::class];
    }

    public function toPagerDuty($notifiable): PagerDutyMessage
    {
        $dateTime = new \DateTime();
        $timestamp = $dateTime->format('m-d-Y h:i:s');

        return PagerDutyMessage::create()
            ->setSource('testSource')
            ->setRoutingKey('92d00fa05c29430fc0a8cdd9b3ce02f6')
            ->setSummary("There was an error with your site in the created at. {$timestamp}");
    }

    public function routeNotificationForPagerDuty(): string
    {
        return '92d00fa05c29430fc0a8cdd9b3ce02f6';
    }
}