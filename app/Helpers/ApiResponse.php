<?php

namespace App\Helpers;

class ApiResponse
{
    public static function success($data = null, $message = 'Berhasil', $code = 200)
    {
        return response()->json([
            'status' => 'Success',
            'message' => $message,
            'data' => $data,
        ], $code);
    }

    public static function error($message = 'Terjadi kesalahan', $error = null, $code = 500)
    {
        return response()->json([
            'status' => 'Error',
            'message' => $message,
            'error' => $error,
        ], $code);
    }
}
