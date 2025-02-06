<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Exceptions;

/**
 * @author shimomo
 */
class AccessoryNotFoundException extends \Exception
{
    /**
     * @param  string           $message
     * @param  int              $code
     * @param  \Throwable|null  $previous
     * @return void
     */
    public function __construct(string $message, int $code = 404, ?\Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
