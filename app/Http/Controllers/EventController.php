<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        return view('home');
    }

    public function create() {
        return view('events.create');
    }

    public function update() {
        $data = [];

        $data['event'] = [
            'title' => 'Título aleatório',
            'description' => 'Descrição aleatória',
            'due_date' => '2024-06-26 19:34:01',
            'qtd_tickets' => 200,
            'price_ticket' => 59.55,
        ];

        return view('events.update', $data);
    }

    public function delete(Request $request) {
        return redirect(route('events'));
    }
}
