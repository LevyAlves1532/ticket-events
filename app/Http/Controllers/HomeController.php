<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Buyer;
use App\Models\Event;
use App\Models\TicketBuyer;

class HomeController extends Controller
{
    public function index() {
        $events = Event::all();

        $data['qtd_event'] = $events->count();
        $data['qtd_buyers'] = Buyer::all()->count();
        $data['qtd_ticket_buyers'] = TicketBuyer::all()->count();

        $data['events'] = $events;

        return view('home', $data);
    }
}
