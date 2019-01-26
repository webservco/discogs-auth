<?php
namespace WebServCo\DiscogsAuth\OAuth;

final class OAuth implements \WebServCo\DiscogsAuth\Interfaces\AuthInterface
{
    /**
     * Get Authorization Header.
     * This is the main header used in any authenticated requests.
     * Reference: Step 5 of Discogs OAuth Flow.
     */
    public function getAuthHeader()
    {
        throw new \WebServCo\DiscogsAuth\Exceptions\AuthException('Functionality not implemented.');
    }
}
