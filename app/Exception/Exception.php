<?php

namespace App\Exception;

class Exception extends \Exception
{
    const SYS_ERROR_UNKNOWN = 100101;
    const SYS_CHECKTOKEN_FAIL = 100201;

    public $messageMap = [
        self::SYS_ERROR_UNKNOWN => '未知错误',
        self::SYS_CHECKTOKEN_FAIL => '签名校验失败',
    ];

    public function __construct($code = 0)
    {
        if (isset($this->messageMap[$code])) {
            $this->message = $this->messageMap[$code];
        }

        parent::__construct($this->message, $code);
    }
}
