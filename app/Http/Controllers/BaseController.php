<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BaseController extends Controller
{
    protected function successResponse(string $message, array $data =[], int $code): JsonResponse
    {
        return response()->json([
            'status'=> 'success',
            'message' => $message,
            'data' => $data
        ], $code);
    }


    protected function errorResponse(string $message, array $data =[], int $code):JsonResponse
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'data' => $data
        ], $code);
    }
}
