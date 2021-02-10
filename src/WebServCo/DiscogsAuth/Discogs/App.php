<?php declare(strict_types = 1);

namespace WebServCo\DiscogsAuth\Discogs;

final class App implements \WebServCo\DiscogsAuth\Interfaces\AuthInterface
{

    protected $consumerKey;
    protected $consumerSecret;

    public function __construct($consumerKey, $consumerSecret)
    {
        $this->consumerKey = $consumerKey;
        $this->consumerSecret = $consumerSecret;
    }

    /**
     * Get Authorization Header.
     * Reference: Discogs Auth Flow.
     */
    public function getAuthHeader()
    {
        return \sprintf(
            '%s key=%s, secret=%s',
            \WebServCo\DiscogsAuth\AuthType::DISCOGS,
            $this->consumerKey,
            $this->consumerSecret
        );
    }
}
