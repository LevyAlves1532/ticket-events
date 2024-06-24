<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Event;
use App\Models\Buyer;
use App\Models\TicketBuyer;

class TicketBuyerController extends Controller
{
    public function create_buyer_in_event(Request $request) {
        $data['event_id'] = $request->event_id;
        $data['buyers'] = Buyer::all();
        return view('ticket_buyers.create_buyer_in_event', $data);
    }

    public function create_buyer_in_event_action(Request $request) {
        $validator = $request->validate([
            'event_id' => 'required',
            'buyer_id' => 'required',
        ]);

        $event = Event::find($request->event_id);

        if (!$event) return redirect(route('events'));
        if (!Buyer::find($request->buyer_id)) return redirect(route('ticket_buyers.create_buyer_in_event', ['event_id' => $validator['event_id']]));
        if ($event->ticket_buyers->where('buyer_id', '=', $validator['buyer_id'])->count() > 0) {
            return redirect(route('events.update', ['id' => $validator['event_id']]));
        }

        $validator['code'] = '#' . Str::random(10);

        while ($event->ticket_buyers->where('code', '=', $validator['code'])->count() > 0) {
            $validator['code'] = Str::random(10);
        }

        if ($event->ticket_buyers->count() <= $event->qtd_tickets) {
            TicketBuyer::create($validator);
        }

        return redirect(route('events.update', ['id' => $validator['event_id']]));
    }

    public function delete_buyer_in_event(Request $request) {
        if ($request->event_id) {
            $event = Event::find($request->event_id);

            if ($event && !empty($request->id)) {
                $ticket_buyer = $event->ticket_buyers->find($request->id);

                if ($ticket_buyer) {
                    $ticket_buyer->delete();
                }
            }

            return redirect(route('events.update', ['id' => $request->event_id]));
        } else {
            return redirect(route('events'));
        }
    }
}
