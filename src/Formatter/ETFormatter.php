<?php

declare(strict_types=1);

namespace Brick\Postcode\Formatter;

use Brick\Postcode\CountryPostcodeFormatter;

/**
 * Validates and formats postcodes in Ethiopia.
 *
 * Postcodes consist of 4 digits, without separator.
 * According to Wikipedia, the code is only used on a trial basis for Addis Ababa addresses.
 *
 * @see https://en.wikipedia.org/wiki/List_of_postal_codes
 */
final class ETFormatter implements CountryPostcodeFormatter
{
    public function format(string $postcode) : ?string
    {
        if (preg_match('/^[0-9]{4}$/', $postcode) !== 1) {
            return null;
        }

        return $postcode;
    }
}
