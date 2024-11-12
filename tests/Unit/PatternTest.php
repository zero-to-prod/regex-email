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
        self::assertEquals(
            1,
            preg_match(
                RegexEmail::pattern,
                'example@domain.com'
            )
        );
    }

    /**
     * @test
     *
     * @see RegexEmail::pattern
     */
    public function no_match(): void
    {
        self::assertEquals(
            0,
            preg_match(
                RegexEmail::pattern,
                'not an email'
            )
        );
    }
}