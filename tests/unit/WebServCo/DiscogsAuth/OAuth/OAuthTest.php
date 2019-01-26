<?php
namespace Tests\DiscogsAuth\OAuth;

use PHPUnit\Framework\TestCase;
use WebServCo\DiscogsAuth\OAuth\OAuth;

final class OAuthTest extends TestCase
{
    /**
     * @test
     */
    public function dummyPassingTest()
    {
        $oAuth = new OAuth('foo', 'bar', 'baz', 'qux');
        $this->assertTrue($oAuth instanceof OAuth);
    }
}
