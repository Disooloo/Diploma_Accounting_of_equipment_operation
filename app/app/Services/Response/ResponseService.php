<?php

namespace App\Services\Response;

class ResponseService
{

    public static function sendJsonReponse($status, $data = [], $code = 200, $errors = [])
    {
        return response()->json([
            'status' => $status,
            'data' => $data,
            'errors' => $errors
        ], $code);
    }

}
