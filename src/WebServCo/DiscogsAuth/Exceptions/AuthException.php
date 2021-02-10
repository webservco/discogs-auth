<?php declare(strict_types = 1);

namespace WebServCo\DiscogsAuth\Exceptions;

class AuthException extends \WebServCo\Framework\Exceptions\ApplicationException
{

    const CODE = 0;

    public function __construct($message, $code = self::CODE, ?\Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
