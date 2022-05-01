<?php

namespace App\Http\Controllers;

use App\Models\seats;
use App\Http\Requests\StoreseatsRequest;
use App\Http\Requests\UpdateseatsRequest;

class SeatsController extends Controller
{

    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreseatsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreseatsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\seats  $seats
     * @return \Illuminate\Http\Response
     */
    public function show(seats $seats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\seats  $seats
     * @return \Illuminate\Http\Response
     */
    public function edit(seats $seats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateseatsRequest  $request
     * @param  \App\Models\seats  $seats
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateseatsRequest $request, seats $seats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\seats  $seats
     * @return \Illuminate\Http\Response
     */
    public function destroy(seats $seats)
    {
        //
    }
}
