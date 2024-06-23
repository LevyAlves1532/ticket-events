<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Buyer;

class BuyerController extends Controller
{
    public function index()
    {
        $data['buyers'] = Buyer::all();
        return view('buyers', $data);
    }

    public function create()
    {
        return view('buyers.create');
    }

    public function create_action(Request $request) {
        $validator = $request->validate([
            'name' => 'required|min:3',
            'phone' => 'required',
        ]);

        $buyer = Buyer::create($validator);
        $buyer->save();

        return redirect(route('buyers'));
    }

    public function update(Request $request) {
        $data['buyer'] = Buyer::find($request->id);

        if (empty($data['buyer'])) return redirect(route('buyers'));

        return view('buyers.update', $data);
    }

    public function update_action(Request $request) {
        if (!empty($request->id)) {
            $id = $request->id;

            $buyer = Buyer::find($id);

            if (!empty($buyer)) {
                $validator = $request->validate([
                    'name' => 'required|min:3',
                    'phone' => 'required',
                ]);

                $buyer->update($validator);
            }
        }

        return redirect(route('buyers.update', ['id' => $id]));
    }

    public function delete(Request $request) {
        if (!empty($request->id)) {
            $buyer = Buyer::find($request->id);

            if (!empty($buyer)) {
                $buyer->delete();
            }
        }

        return redirect(route('buyers'));
    }
}
