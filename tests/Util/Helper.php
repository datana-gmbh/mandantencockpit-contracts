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

namespace Datana\Mandantencockpit\Contracts\Tests\Util;

use Datana\Mandantencockpit\Contracts\Bridge\Faker\Provider\TargetIdProvider;
use Faker\Factory;
use Faker\Generator;

trait Helper
{
    final protected static function faker(string $locale = 'de_DE'): Generator
    {
        static $fakers = [];

        if (!\array_key_exists($locale, $fakers)) {
            $faker = Factory::create($locale);

            $faker->seed(9001);

            $faker->addProvider(new TargetIdProvider($faker));

            $fakers[$locale] = $faker;
        }

        return $fakers[$locale];
    }
}
