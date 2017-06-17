<?php
/**
 * Created by IntelliJ IDEA.
 * User: nuocg
 * Date: 4/15/2017
 * Time: 4:09 PM
 */

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification as BaseNotification;

abstract class Notification extends BaseNotification implements ShouldQueue
{
    use Queueable;
}