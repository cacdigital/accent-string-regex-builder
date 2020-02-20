<?php

namespace Tests;

use AccentStringRegexBuilder\AccentString;
use PHPUnit\Framework\TestCase;

class AccentStringTest extends TestCase
{
    /** @test */
    public function regexShouldWork(): void
    {
        $this->assertSame('', AccentString::toRegex(''));
    }

    /** @test */
    public function formatStringShouldWork(): void
    {
        $this->assertSame(
            'h[eéèêë]ll[oóòõôö]',
            AccentString::toRegex('Hello')
        );
        $this->assertSame(
            '[aáàãâä][eéèêë][iíìîï][oóòõôö][uúùûü][cç]',
            AccentString::toRegex('AEIOUC')
        );
        $this->assertSame(
            '[aáàãâä] [eéèêë] [iíìîï] [oóòõôö] [uúùûü] [cç]',
            AccentString::toRegex('A E I O U C')
        );
        $this->assertSame(
            'l[oóòõôö]r[eéèêë]m [iíìîï]ps[uúùûü]m s[iíìîï]t [aáàãâä]m[eéèêë]t',
            AccentString::toRegex('Lorem ipsum sit amet')
        );
    }
}
