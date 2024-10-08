<?php

declare(strict_types=1);

namespace Brick\Postcode\Formatter;

use Brick\Postcode\CountryPostcodeFormatter;

/**
 * Validates and formats postcodes in Tajikistan.
 *
 * Postcodes consist of 6 digits, without separator.
 *
 * @see https://en.wikipedia.org/wiki/List_of_postal_codes
 */
final class TJFormatter implements CountryPostcodeFormatter
{
    public function format(string $postcode) : ?string
    {
        if (preg_match('/^[0-9]{6}$/', $postcode) !== 1) {
            return null;
        }

        return $postcode;
    }
}
