<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //index

    public function index(): string
    {
        return "Index Route";
    }

    public function show(string $id): string
    {
        return "User Route {$id}";
    }
}
