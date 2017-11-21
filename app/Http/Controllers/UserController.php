<?php

namespace App\Http\Controllers;

use App\Http\Responses\UserIndexResponse;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();

        return new UserIndexResponse($users);
    }
}
