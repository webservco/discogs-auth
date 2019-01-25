<?php
namespace WebServCo\DiscogsAuth;

abstract class AbstractAppAuth
{
    protected $consumerKey;
    protected $consumerSecret;

    public function __construct($consumerKey, $consumerSecret)
    {
        $this->consumerKey = $consumerKey;
        $this->consumerSecret = $consumerSecret;
    }
}
