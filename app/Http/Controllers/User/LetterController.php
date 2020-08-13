<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Letter;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LetterController extends Controller
{
    public function index()
    {
        $letters = Letter::where('user_id', Auth::user()->id)->get();

        return view('user.letter', compact('letters'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'description'   => 'required|string',
        ]);

        Letter::create([
            'description'   => $request->description,
            'user_id'       => Auth::user()->id
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    public function show($id)
    {
        $letter = Letter::findOrFail($id);
        if ($letter->user_id == Auth::user()->id) {
            if ($letter->status !== 0) {
                $pdf = PDF::loadView('admin.letter.pdf', compact('letter'));
                return $pdf->stream();
            } else {
                return abort(404);
            }
        } else {
            return abort(404);
        }
    }
}
