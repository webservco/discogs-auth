<?php
namespace WebServCo\DiscogsAuth\Discogs;

final class User implements \WebServCo\DiscogsAuth\Interfaces\AuthInterface
{
    protected $personalAccessToken;

    public function __construct($personalAccessToken)
    {
        $this->personalAccessToken = $personalAccessToken;
    }

    /**
     * Get Authorization Header.
     * Reference: Discogs Auth Flow.
     */
    public function getAuthHeader()
    {
        return sprintf(
            '%s token=%s',
            \WebServCo\DiscogsAuth\AuthType::DISCOGS,
            $this->personalAccessToken
        );
    }
}
