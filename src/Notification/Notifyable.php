<?php

declare(strict_types=1);

namespace Datana\Mandantencockpit\Contracts\Notification;

use App\Domain\Enum\Notification\Priority;
use App\Domain\Enum\Notification\Target;
use App\Domain\Value\Notification\TargetId;

interface Notifyable
{
    public function notificationTargetId(): TargetId;

    public function notificationTarget(): Target;

    public function notificationPriority(): Priority;
}
