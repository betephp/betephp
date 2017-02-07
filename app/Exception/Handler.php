<?php

namespace App\Exception;

use Bete\Exception\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    protected $dontReport = [
        'Bete\Exception\ValidationException',
    ];

    public function renderJsonException($e)
    {
        return parent::renderJsonException($e);
    }

    public function renderHtmlException($e)
    {
        return parent::renderHtmlException($e);
    }
}
