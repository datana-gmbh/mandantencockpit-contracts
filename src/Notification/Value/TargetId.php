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

namespace Datana\Mandantencockpit\Contracts\Notification\Value;

use Datana\Mandantencockpit\Contracts\Bridge\ApiPlatform\IriUsableInterface;
use OskarStark\Value\TrimmedNonEmptyString;

final class TargetId implements \Stringable, IriUsableInterface
{
    private function __construct(
        private string $value,
    ) {
        $this->value = TrimmedNonEmptyString::fromString($value)->toString();
    }

    /**
     * @see IriUsableInterface
     */
    public function __toString(): string
    {
        return $this->toString();
    }

    public static function fromString(string $value): self
    {
        return new self($value);
    }

    public static function fromInt(int $value): self
    {
        return self::fromString((string) $value);
    }

    public function toString(): string
    {
        return $this->value;
    }

    public function equals(self $other): bool
    {
        return $other->toString() === $this->value;
    }
}
