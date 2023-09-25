<?php

declare(strict_types=1);

namespace Datana\Mandantencockpit\Contracts\Notification\Enum;

use OskarStark\Enum\Trait\Comparable;
use OskarStark\Enum\Trait\ToArray;

enum Target: string
{
    use Comparable;
    use ToArray;

    case DATENEINGABE = 'dateneingabe';
    case DATENEINGABE_REMINDER = 'dateneingabe-reminder';
    case DOKUMENT = 'dokument';
    case TIMELINE = 'timeline';
}
