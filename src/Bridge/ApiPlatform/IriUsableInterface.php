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

namespace Datana\Mandantencockpit\Contracts\Bridge\ApiPlatform;

/**
 * @see \ApiPlatform\Core\Identifier\CompositeIdentifierParser::stringify()
 *
 * Currently there is no way to define a normalizer for generating the IRI
 */
interface IriUsableInterface
{
    public function __toString(): string;
}
