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

namespace Datana\Mandantencockpit\Contracts\Tests\Unit\Notification\Enum;

use Datana\Mandantencockpit\Contracts\Notification\Enum\Priority;
use OskarStark\Enum\Test\EnumTestCase;

final class PriorityTest extends EnumTestCase
{
    protected static function getClass(): string
    {
        return Priority::class;
    }

    protected static function getNumberOfValues(): int
    {
        return 2;
    }
}
