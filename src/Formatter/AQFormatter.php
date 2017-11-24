<?php

declare(strict_types=1);

namespace Brick\Postcode\Formatter;

use Brick\Postcode\CountryPostcodeFormatter;

/**
 * Validates and formats postcodes in British Antarctic Territory.
 *
 * This country uses a single postcode for all addresses.
 */
class AQFormatter implements CountryPostcodeFormatter
{
    /**
     * {@inheritdoc}
     */
    public function format(string $postcode) : ?string
    {
        if ($postcode === 'BIQQ1ZZ') {
            return 'BIQQ 1ZZ';
        }

        return null;
    }
}