<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class personalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=DB::table('personal_data')->first();
        return view('dasboard', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('listData');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        DB::table('personal_data')->insert([
            'name' => $request->name,
            'nick_name' => $request->nick_name,
            'telephone' => $request->telephone,
            'mail' => $request->mail,
            'address' => $request->address,
        ]);
        return view('listData');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
