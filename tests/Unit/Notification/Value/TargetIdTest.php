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

namespace Datana\Mandantencockpit\Contracts\Tests\Unit\Notification\Value;

use Datana\Mandantencockpit\Contracts\Notification\Value\TargetId;
use Datana\Mandantencockpit\Contracts\Tests\Util\Helper;
use PHPUnit\Framework\TestCase;

final class TargetIdTest extends TestCase
{
    use Helper;

    /**
     * @test
     *
     * @dataProvider fromStringProvider
     */
    public function fromString(string $value, string $expected): void
    {
        self::assertSame(
            $expected,
            TargetId::fromString($value)->toString(),
        );
    }

    /**
     * @return \Generator<string, array{0: string, 1: string}>
     */
    public static function fromStringProvider(): iterable
    {
        $word = self::faker()->word();

        yield 'trimmed' => [$word, $word];
        yield 'untrimmed-start' => [' '.$word, $word];
        yield 'untrimmed-end' => [$word.' ', $word];
        yield 'untrimmed-start-and-end' => [' '.$word.' ', $word];
    }

    /**
     * @test
     *
     * @dataProvider \Ergebnis\Test\Util\DataProvider\IntProvider::arbitrary()
     */
    public function fromInt(int $value): void
    {
        self::assertSame(
            (string) $value,
            TargetId::fromInt($value)->toString(),
        );
    }

    /**
     * @test
     *
     * @dataProvider \Ergebnis\Test\Util\DataProvider\StringProvider::blank()
     * @dataProvider \Ergebnis\Test\Util\DataProvider\StringProvider::empty()
     */
    public function fromStringThrowsException(string $value): void
    {
        $this->expectException(\InvalidArgumentException::class);

        TargetId::fromString($value);
    }
}
