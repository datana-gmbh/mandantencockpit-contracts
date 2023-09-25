<?php

declare(strict_types=1);

namespace Datana\Mandantencockpit\Contracts\Notification\Enum;

use OskarStark\Enum\Trait\Comparable;
use OskarStark\Enum\Trait\ToArray;

enum Priority: string
{
    use Comparable;
    use ToArray;

    case HIGH = 'high';
    case NORMAL = 'normal';
}
