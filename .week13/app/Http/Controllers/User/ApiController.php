<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    private function sendSuccess($data = [], $message = "Success"){
        return response()->json([
            'code' => 200,
            'message' => $message,
            'data' => $data
        ],200);

    }
    private function sendMessage($data = [], $message = "Success"){
        return response()->json([
            'code' => 200,
            'message' => $message,
        ],200);

    }
    private function sendUnauthorized($data = [], $message = "Unauthorized"){
        return response()->json([
            'code' => 401,
            'message' => $message,
        ],401);

    }
    private function sendBadRequest($data = [], $message = "Bad Request"){
        return response()->json([
            'code' => 400,
            'message' => $message,
        ],400);

    }
    private function sendForbidden($data = [], $message = "Forbidden"){
        return response()->json([
            'code' => 403,
            'message' => $message,
        ],403);

    }
}
