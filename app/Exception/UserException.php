<?php

namespace App\Exception;

use Exception;

class UserException extends Exception
{
    const SYS_ERROR_UNKNOWN = 100101;
    const SYS_CHECKTOKEN_FAIL = 100201;

    public function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
