<?php

namespace App\Http\Controllers;

use App\Http\DataAccess\UserAccess;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //index

    public function index()
    {
        try {
            $users = UserAccess::getAllUsers();
            return [
                'message' => "All users",
                'data' => $users
            ];
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function show(string $id): string
    {
        return "User Route {$id}";
    }
}
