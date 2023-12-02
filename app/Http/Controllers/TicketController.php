<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get tickets
        try {
            $list = Ticket::list_tickets();
            return [
                "message" => "Tickets fetched successfully",
                "status_code" => 200,
                "content" => $list
            ];
        } catch (\Throwable $error) {
            throw $error->__toString();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (empty($request)) {
            return "Request empty";
        }

        // try {
        //     $data = $request->all();
        //     $new_ticket = Ticket::create_ticket($data);

        //     return [
        //         "message" => "Ticket Created Successfully",
        //         "data" => $new_ticket,
        //         "status_code" => 200
        //     ];
        // } catch (\Throwable $error) {
        //     return $error->__toString();
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {

            $ticket = Ticket::get_ticket($id);

            return [
                "message" => "Ticket fetched successfully",
                "status_code" => 200,
                "content" => $ticket
            ];
        } catch (\Throwable $error) {

            return $error->__toString();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {

            $ticket = $request->all();
            $update_ticket = Ticket::update_ticket($id, $ticket);

            return [
                "message" => 'Ticket Updated Successfully',
                "status_code" => 200,
                "content" => $update_ticket
            ];
        } catch (\Throwable $error) {
            return $error->__toString();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
