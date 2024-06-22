<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function index()
    {
        return view('buyers');
    }

    public function create()
    {
        return view('buyers.create');
    }

    public function update() {
        $data['buyer'] = [
            'id' => 1,
            'name' => 'Pedro',
            'phone' => '47 9 9196-6719',
        ];

        return view('buyers.update', $data);
    }

    public function delete() {
        return redirect(route('buyers'));
    }
}
