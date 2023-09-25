<?php

declare(strict_types=1);

/**
 * This file is part of datana-gmbh/mandantencockpit-contracts.
 *
 * (c) Datana GmbH <info@datana.rocks>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Datana\Mandantencockpit\Contracts\Notification;

use Datana\Mandantencockpit\Contracts\Notification\Enum\Priority;
use Datana\Mandantencockpit\Contracts\Notification\Enum\Target;
use Datana\Mandantencockpit\Contracts\Notification\Value\TargetId;

interface Notifyable
{
    public function notificationTargetId(): TargetId;

    public function notificationTarget(): Target;

    public function notificationPriority(): Priority;
}
