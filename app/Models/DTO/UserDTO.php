<?php

namespace App\Http\DataAccess;

use Illuminate\Support\Facades\DB;

class UserDTO
{

    public static function getAllUsers(): array
    {
        $user_list = DB::select('SELECT * FROM users');
        return $user_list;
    }
}
