<?php

declare(strict_types=1);

namespace Brick\Postcode\Formatter;

use Brick\Postcode\CountryPostcodeFormatter;

/**
 * Validates and formats postcodes in Tunisia.
 *
 * Postcodes consist of 4 digits, without separator.
 *
 * @see https://en.wikipedia.org/wiki/Postal_codes_in_Tunisia
 * @see https://en.wikipedia.org/wiki/List_of_postal_codes
 */
class TNFormatter implements CountryPostcodeFormatter
{
    /**
     * {@inheritdoc}
     */
    public function format(string $postcode) : ?string
    {
        if (strlen($postcode) !== 4) {
            return null;
        }

        if (! ctype_digit($postcode)) {
            return null;
        }

        return $postcode;
    }
}
