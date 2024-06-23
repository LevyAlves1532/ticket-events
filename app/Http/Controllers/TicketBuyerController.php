<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketBuyerController extends Controller
{
    public function create_event(Request $request) {
        $data['id_event'] = $request->id_event;
        return view('ticket_buyers.create_event', $data);
    }

    public function delete_event(Request $request) {
        return redirect(route('events.update', ['id' => $request->id_event]));
    }
}
