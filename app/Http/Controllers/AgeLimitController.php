<?php

namespace App\Http\Controllers;

use App\Models\AgeLimit;
use App\Http\Requests\StoreAgeLimitRequest;
use App\Http\Requests\UpdateAgeLimitRequest;

class AgeLimitController extends Controller
{
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
     * @param  \App\Http\Requests\StoreAgeLimitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAgeLimitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AgeLimit  $ageLimit
     * @return \Illuminate\Http\Response
     */
    public function show(AgeLimit $ageLimit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AgeLimit  $ageLimit
     * @return \Illuminate\Http\Response
     */
    public function edit(AgeLimit $ageLimit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAgeLimitRequest  $request
     * @param  \App\Models\AgeLimit  $ageLimit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAgeLimitRequest $request, AgeLimit $ageLimit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AgeLimit  $ageLimit
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgeLimit $ageLimit)
    {
        //
    }
}
