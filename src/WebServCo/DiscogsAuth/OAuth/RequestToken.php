<?php declare(strict_types = 1);

namespace WebServCo\DiscogsAuth\OAuth;

final class RequestToken implements \WebServCo\DiscogsAuth\Interfaces\AuthInterface
{

    protected string $callback;
    protected string $consumerKey;
    protected string $consumerSecret;

    public function __construct(string $consumerKey, string $consumerSecret, string $callback)
    {
        $this->consumerKey = $consumerKey;
        $this->consumerSecret = $consumerSecret;
        $this->callback = $callback;
    }

    /**
     * Get Authorization Header.
     * Used in oauth/request_token endpoint requests.
     * Reference: Step 2 of Discogs OAuth Flow.
     */
    public function getAuthHeader(): string
    {
        return \sprintf(
            '%s oauth_consumer_key="%s",'.
            'oauth_nonce="%s",'.
            'oauth_signature="%s&",'.
            'oauth_signature_method="%s",'.
            'oauth_timestamp="%s",'.
            'oauth_callback="%s"',
            \WebServCo\DiscogsAuth\AuthType::OAUTH,
            $this->consumerKey,
            \mt_rand(),
            $this->consumerSecret,
            'PLAINTEXT',
            \time(),
            $this->callback
        );
    }
}
