<?php

declare(strict_types=1);

namespace Brick\Postcode\Tests\Formatter;

use Brick\Postcode\CountryPostcodeFormatter;
use Brick\Postcode\Formatter\ECFormatter;
use Brick\Postcode\Tests\CountryPostcodeFormatterTest;

/**
 * Unit tests for the EC postcode formatter.
 */
class ECFormatterTest extends CountryPostcodeFormatterTest
{
    protected function getFormatter() : CountryPostcodeFormatter
    {
        return new ECFormatter();
    }

    public function providerFormat() : array
    {
        return [
            ['', null],

            ['1', null],
            ['12', null],
            ['123', null],
            ['1234', null],
            ['12345', null],
            ['123456', '123456'],
            ['1234567', null],

            ['A', null],
            ['AB', null],
            ['ABC', null],
            ['ABCD', null],
            ['ABCDE', null],
            ['ABCDEF', null],
        ];
    }
}
