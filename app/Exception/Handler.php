<?php

namespace App\Exception;

use Throwable;
use Bete\Exception\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    protected $dontReport = [
        'Bete\Exception\ValidationException',
    ];

    public function renderJsonException(Throwable $e)
    {
        return parent::renderJsonException($e);
    }

    public function renderHtmlException(Throwable $e)
    {
        return parent::renderHtmlException($e);
    }
}
