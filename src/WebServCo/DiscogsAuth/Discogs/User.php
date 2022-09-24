<?php

declare(strict_types=1);

namespace WebServCo\DiscogsAuth\Discogs;

final class User implements \WebServCo\DiscogsAuth\Interfaces\AuthInterface
{
    protected string $personalAccessToken;

    public function __construct(string $personalAccessToken)
    {
        $this->personalAccessToken = $personalAccessToken;
    }

    /**
     * Get Authorization Header.
     * Reference: Discogs Auth Flow.
     */
    public function getAuthHeader(): string
    {
        return \sprintf('%s token=%s', \WebServCo\DiscogsAuth\AuthType::DISCOGS, $this->personalAccessToken);
    }
}
