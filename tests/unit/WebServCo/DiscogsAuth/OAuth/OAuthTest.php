<?php

declare(strict_types=1);

namespace Tests\DiscogsAuth\OAuth;

use PHPUnit\Framework\TestCase;
use WebServCo\DiscogsAuth\OAuth\OAuth;

final class OAuthTest extends TestCase
{
    /**
     * @test
     */
    public function dummyPassingTest(): void
    {
        $oAuth = new OAuth('foo', 'bar', 'baz', 'qux');
        $this->assertTrue($oAuth instanceof OAuth);
    }
}
