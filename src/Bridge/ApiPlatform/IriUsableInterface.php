<?php

declare(strict_types=1);

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
