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
