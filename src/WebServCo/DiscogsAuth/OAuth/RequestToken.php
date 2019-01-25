<?php
namespace WebServCo\DiscogsAuth\OAuth;

final class RequestToken extends \WebServCo\DiscogsAuth\AbstractAppAuth implements
    \WebServCo\DiscogsAuth\Interfaces\AuthInterface
{
    /**
     * Get Authorization Header.
     * Used in oauth/request_token endpoint requests.
     * Reference: Step 2 of Discogs OAuth Flow.
     */
    public function getAuthHeader()
    {
        throw new \WebServCo\DiscogsAuth\Exceptions\AuthException('Functionality not implemented.');
    }
}
