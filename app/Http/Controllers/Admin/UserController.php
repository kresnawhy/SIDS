<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'ASC')->get();

        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required|string',
            'NIK'           => 'required|string|size:16',
            'birth_place'   => 'required|string',
            'birth_date'    => 'required|date',
            'religion'      => 'required|string',
            'gender'        => 'required|string',
            'occupation'    => 'required|string',
            'home_block'    => 'required|string|size:2',
            'home_number'   => 'required|string|size:2',
            'KTP'           => 'required|image|mimes:png,jpeg,jpg',
            'email'         => 'required|string|email|max:255',
            'password'      => 'required|string|min:8'
        ]);

        if ($request->hasFile('KTP')) {
            $file = $request->file('KTP');
            $image = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/ktp', $image);
        }

        User::create([
            'name'          => $request->name,
            'NIK'           => $request->NIK,
            'birth_place'   => $request->birth_place,
            'birth_date'    => $request->birth_date,
            'religion'      => $request->religion,
            'gender'        => $request->gender,
            'occupation'    => $request->occupation,
            'home_block'    => $request->home_block,
            'home_number'   => $request->home_number,
            'KTP'           => $image,
            'email'         => $request->email,
            'password'      => $request->password,
            'old_password'  => $request->password,
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'          => 'required|string',
            'NIK'           => 'required|string|size:16',
            'birth_place'   => 'required|string',
            'birth_date'    => 'required|date',
            'religion'      => 'required|string',
            'gender'        => 'required|string',
            'occupation'    => 'required|string',
            'home_block'    => 'required|string|size:2',
            'home_number'   => 'required|string|size:2',
            'KTP'           => 'required|image|mimes:png,jpeg,jpg',
            'email'         => 'required|string|email|max:255',
            'password'      => 'required|string|min:8'
        ]);

        if ($request->hasFile('KTP')) {
            $file = $request->file('KTP');
            $image = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/ktp', $image);
        }

        User::whereId($id)->update([
            'name'          => $request->name,
            'NIK'           => $request->NIK,
            'birth_place'   => $request->birth_place,
            'birth_date'    => $request->birth_date,
            'religion'      => $request->religion,
            'gender'        => $request->gender,
            'occupation'    => $request->occupation,
            'home_block'    => $request->home_block,
            'home_number'   => $request->home_number,
            'KTP'           => $image,
            'email'         => $request->email,
            'password'      => $request->password,
            'old_password'  => $request->password,
        ]);

        return redirect()->route('user.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
