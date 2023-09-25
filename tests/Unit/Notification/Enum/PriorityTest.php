<?php

declare(strict_types=1);

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
