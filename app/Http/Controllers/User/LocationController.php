<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Auth::user()->locations()->get();

        return view('user.location', compact('locations'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'date'          => 'required|date',
            'destination'   => 'required|string',
        ]);

        Location::create([
            'date'          => $request->date,
            'destination'   => $request->destination,
            'user_id'       => Auth::user()->id
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }
}
