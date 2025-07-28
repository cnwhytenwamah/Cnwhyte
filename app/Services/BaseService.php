<?php

namespace App\Services;

class BaseService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function successMsg(string $message, array $data =[]):stdClass
    {
        return (object)[
            'status' => true,
            'message' => $message,
            'data' => $data,
            'code' => 200,
        ];
    }

    public function errorMsg(string $message, int $code):stdClass
    {
        return (object)[
            'status' => false,
            'message' => $message,
            'code' => $code,
        ];
    }
}
