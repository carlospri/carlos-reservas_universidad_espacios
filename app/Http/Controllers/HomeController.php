<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Home.starMenu');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Home.historial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $id)
    {
        //return view('Home.starMenu', ['id' => $id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Home.notification',['id'=>$id=0]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('Home.notifiCanceled',['id'=>$id=0]);
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
