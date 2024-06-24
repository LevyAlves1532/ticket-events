<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\TicketBuyer;

class EventController extends Controller
{
    public function index() {
        $data['events'] = Event::all();
        return view('events', $data);
    }

    public function create() {
        return view('events.create');
    }

    public function create_action(Request $request) {
        $input = $request->all();
        $input['price_ticket'] = str_replace('.', '', $input['price_ticket']);
        $input['price_ticket'] = str_replace(',', '.', $input['price_ticket']);
        $request->merge($input);

        $validator = $request->validate([
            'title' => 'required|min:3',
            'due_date' => 'required|date|after:today',
            'qtd_tickets' => 'required|numeric|gt:0',
            'price_ticket' => 'required|numeric|gt:0',
            'description' => 'required|min:6',
        ]);

        $event = Event::create($validator);
        $event->save();

        return redirect(route('events'));
    }

    public function update(Request $request) {
        $data['event'] = Event::find($request->id);

        if (empty($data['event'])) return redirect(route('events'));

        $data['ticket_buyers'] = TicketBuyer::where('event_id', '=', $request->id)->get();

        return view('events.update', $data);
    }

    public function update_action(Request $request) {
        $validator = $request->validate([
            'id' => 'required',
        ]);

        $id = $validator['id'];

        $event = Event::find($id);

        if (!empty($event)) {
            $input = $request->all();
            $input['price_ticket'] = str_replace('.', '', $input['price_ticket']);
            $input['price_ticket'] = str_replace(',', '.', $input['price_ticket']);
            $request->merge($input);

            $validator = $request->validate([
                'title' => 'min:3',
                'due_date' => 'date|after:today',
                'qtd_tickets' => 'numeric|gt:0',
                'price_ticket' => 'numeric|gt:0',
                'description' => 'min:6',
            ]);

            $event->update($validator);
        }

        return redirect(route('events.update', ['id' => $id]));
    }

    public function delete(Request $request) {
        if (!empty($request->id)) {
            $event = Event::find($request->id);

            if (!empty($event)) {
                $event->delete();
            }
        }

        return redirect(route('events'));
    }
}
