<?php

namespace Illuminate\Foundation\Support\Notifications;

use Illuminate\Contracts\Notifications\Channels\Factory;
use Illuminate\Contracts\Notifications\Channels\Dispatcher;

/**
 * Class NotificationChannel.
 */
abstract class NotificationChannel implements Factory, Dispatcher
{
}
