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
        return sprintf(
            '%s key=%s, secret=%s',
            \WebServCo\DiscogsAuth\AuthType::DISCOGS,
            $this->consumerKey,
            $this->consumerSecret
        );
    }
}
