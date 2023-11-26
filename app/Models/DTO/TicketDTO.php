<?php

namespace App\Models\DTO;

use Illuminate\Support\Facades\DB;

class TicketDTO
{
    public function __construct()
    {
    }

    public function create_ticket_facade(array $data)
    {
        $ticket = DB::table('tickets')->insert($data);
        $ticket = DB::getPdo()->lastInsertId();
        return $ticket;
    }

    public function update_ticket_facade(mixed $id, array $ticket)
    {
        if (!empty($ticket)) {

            DB::table('tickets')->where('id', $id)->update($ticket);
            $updated_ticket = DB::select('SELECT * FROM tickets WHERE id = :id', ['id' => $id]);

            return $updated_ticket;
        }
    }
}
