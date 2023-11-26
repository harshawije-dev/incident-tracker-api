<?php

namespace App\Models;

use App\Models\DTO\TicketDTO;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ticket extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    public static function list_tickets()
    {
        $ticket_list = DB::select('SELECT * FROM tickets');
        return $ticket_list;
    }

    public static function get_ticket(mixed $id)
    {
        $ticket = DB::select('SELECT * FROM tickets WHERE id = :id', ['id' => $id]);
        if (!empty($ticket))
            return $ticket;
    }

    public static function create_ticket(array $body)
    {
        $new_ticket = new TicketDTO();
        return $new_ticket->create_ticket_facade($body);
    }

    public static function update_ticket($ticket_id, array $ticket_details)
    {
        $update_ticket = new TicketDTO();
        return $update_ticket->update_ticket_facade($ticket_id, $ticket_details);
    }
}
