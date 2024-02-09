<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiUsersController extends Controller
{
    public function index(Request $request){
        $userList = [];
     return $this->sendSuccess($userList);
       
    }
}
