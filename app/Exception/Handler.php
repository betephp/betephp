<?php

namespace App\Exception;

use Exception;
use Bete\Exception\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    protected $dontReport = [
        'Bete\Exception\ValidationException',
    ];

    public function renderJsonException(Exception $e)
    {
        return parent::renderJsonException($e);
    }

    public function renderHtmlException(Exception $e)
    {
        return parent::renderHtmlException($e);
    }
}
