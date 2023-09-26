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

namespace Datana\Mandantencockpit\Contracts\Bridge\Faker\Provider;

use Datana\Mandantencockpit\Contracts\Notification\Value\TargetId;
use Faker\Provider\Base as BaseProvider;

final class TargetIdProvider extends BaseProvider
{
    public function targetId(): TargetId
    {
        return TargetId::fromString(
            $this->targetIdString(),
        );
    }

    public function targetIdString(): string
    {
        return $this->generator->sha256();
    }
}
