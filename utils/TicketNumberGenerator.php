<?php

namespace Utils;

use Illuminate\Support\Facades\Auth;

class TicketNumberGenerator{
    private string $id;

    public function __construct($userId) {
        $this->id = $userId;
    }

    public function tokenGenerate() {
        $user_id_trim = substr(Auth::user()->id, 3);
        return time() . '-' . $user_id_trim;
    }
}
