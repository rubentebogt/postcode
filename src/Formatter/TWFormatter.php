<?php

declare(strict_types=1);

namespace Brick\Postcode\Formatter;

use Brick\Postcode\CountryPostcodeFormatter;

/**
 * Validates and formats postcodes in Taiwan.
 *
 * Acceptable formats are NNN and NNN-NN, N standing for a digit.
 *
 * The first three digits of the postal code are required; the last two digits are optional.
 *
 * @see https://en.wikipedia.org/wiki/List_of_postal_codes
 * @see https://en.wikipedia.org/wiki/List_of_postal_codes_in_Taiwan
 */
final class TWFormatter implements CountryPostcodeFormatter
{
    public function format(string $postcode) : ?string
    {
        if (preg_match('/^[0-9]+$/', $postcode) !== 1) {
            return null;
        }

        $length = strlen($postcode);

        if ($length === 3) {
            return $postcode;
        }

        if ($length === 5) {
            return substr($postcode, 0, 3) . '-' . substr($postcode, -2);
        }

        return null;
    }
}
