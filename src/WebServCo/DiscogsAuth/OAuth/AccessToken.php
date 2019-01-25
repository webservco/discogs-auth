<?php
namespace WebServCo\DiscogsAuth\OAuth;

final class AccessToken extends \WebServCo\DiscogsAuth\AbstractAppAuth implements
    \WebServCo\DiscogsAuth\Interfaces\AuthInterface
{
    /**
     * Get Authorization Header.
     * Used in oauth/access_token endpoint requests.
     * Reference: Step 4 of Discogs OAuth Flow.
     */
    public function getAuthHeader()
    {
        throw new \WebServCo\DiscogsAuth\Exceptions\AuthException('Functionality not implemented.');
    }
}
