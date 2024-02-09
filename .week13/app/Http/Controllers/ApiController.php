<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    private function success($data = [], $message = 'success'){
        return response()->json([
            'code' => 200,
            'message' => $message,
            'data' => $data
        ],200);
    }
    private function message($message = 'success'){
        return response()->json([
            'code' => 200,
            'message' => $message,
        ],200);
    }
    private function sendUnauthorized( $message = "Unauthorized"){
        return response()->json([
            'code' => 401,
            'message' => $message,
        ],401);

    }
    private function sendBadRequest( $message = "Bad Request"){
        return response()->json([
            'code' => 400,
            'message' => $message,
        ],400);

    }
    private function senForbidden( $message = "Forbidden"){
        return response()->json([
            'code' => 403,
            'message' => $message,
        ],403);

    }
}
