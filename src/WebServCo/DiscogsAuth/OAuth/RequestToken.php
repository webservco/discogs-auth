<?php
namespace WebServCo\DiscogsAuth\OAuth;

final class RequestToken implements \WebServCo\DiscogsAuth\Interfaces\AuthInterface
{
    protected $callbackUrl;
    protected $consumerKey;
    protected $consumerSecret;

    public function __construct($consumerKey, $consumerSecret, $callbackUrl)
    {
        $this->consumerKey = $consumerKey;
        $this->consumerSecret = $consumerSecret;
        $this->callbackUrl = $callbackUrl;
    }

    /**
     * Get Authorization Header.
     * Used in oauth/request_token endpoint requests.
     * Reference: Step 2 of Discogs OAuth Flow.
     */
    public function getAuthHeader()
    {
        return sprintf(
            '%s oauth_consumer_key="%s",
            oauth_nonce="%s",
            oauth_signature="%s&",
            oauth_signature_method="%s",
            oauth_timestamp="%s",
            oauth_callback="%s"',
            \WebServCo\DiscogsAuth\AuthType::OAUTH,
            $this->consumerKey,
            mt_rand(),
            $this->consumerSecret,
            'PLAINTEXT',
            time(),
            $this->callbackUrl
        );
    }
}
