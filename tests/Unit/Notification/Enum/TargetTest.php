<?php

declare(strict_types=1);

namespace Datana\Mandantencockpit\Contracts\Tests\Unit\Notification\Enum;

use Datana\Mandantencockpit\Contracts\Notification\Enum\Target;
use OskarStark\Enum\Test\EnumTestCase;

final class TargetTest extends EnumTestCase
{
    protected static function getClass(): string
    {
        return Target::class;
    }

    protected static function getNumberOfValues(): int
    {
        return 4;
    }
}
