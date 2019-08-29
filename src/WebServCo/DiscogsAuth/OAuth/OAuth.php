<?php
namespace WebServCo\DiscogsAuth\OAuth;

final class OAuth implements \WebServCo\DiscogsAuth\Interfaces\AuthInterface
{
    protected $consumerKey;
    protected $consumerSecret;
    protected $oauthToken;
    protected $oauthTokenSecret;

    public function __construct($consumerKey, $consumerSecret, $oauthToken, $oauthTokenSecret)
    {
        $this->consumerKey = $consumerKey;
        $this->consumerSecret = $consumerSecret;
        $this->oauthToken = $oauthToken;
        $this->oauthTokenSecret = $oauthTokenSecret;
    }

    /**
     * Get Authorization Header.
     * This is the main header used in any authenticated requests.
     * Reference: Step 5 of Discogs OAuth Flow.
     */
    public function getAuthHeader()
    {
        return sprintf(
            '%s oauth_consumer_key="%s",'.
            'oauth_nonce="%s",'.
            'oauth_token="%s",'.
            'oauth_signature="%s&%s",'.
            'oauth_signature_method="%s",'.
            'oauth_timestamp="%s"',
            \WebServCo\DiscogsAuth\AuthType::OAUTH,
            $this->consumerKey,
            mt_rand(),
            $this->oauthToken,
            $this->consumerSecret,
            $this->oauthTokenSecret,
            'PLAINTEXT',
            time()
        );
    }
}
