<?php
namespace WebServCo\DiscogsAuth\Discogs;

final class App extends \WebServCo\DiscogsAuth\AbstractAppAuth implements
    \WebServCo\DiscogsAuth\Interfaces\AuthInterface
{
    /**
     * Get Authorization Header.
     * Reference: Discogs Auth Flow.
     */
    public function getAuthHeader()
    {
        throw new \WebServCo\DiscogsAuth\Exceptions\AuthException('Functionality not implemented.');
    }
}
