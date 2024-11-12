<?php

namespace Tests\Unit;

use Tests\TestCase;
use Zerotoprod\RegexEmail\RegexEmail;

class PatternTest extends TestCase
{
    /**
     * @test
     *
     * @see RegexEmail::pattern
     */
    public function pattern(): void
    {
        self::assertRegExp(
            RegexEmail::pattern,
            'example@domain.com'
        );
    }

    /**
     * @test
     *
     * @see RegexEmail::pattern
     */
    public function no_match(): void
    {
        self::assertNotRegExp(
            RegexEmail::pattern,
            'not an email'
        );
    }
}