<?php

namespace App\Http\Controllers;

use App\Models\Snacks;
use App\Http\Requests\StoreSnacksRequest;
use App\Http\Requests\UpdateSnacksRequest;
use App\Services\SnacksService;

class SnacksController extends Controller
{

    private SnacksService $snacksService;

    public function __construct(SnacksService $snacksService)
    {

        $this->snacksService = $snacksService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->snacksService->SnacksOnShelf();
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
     * @param  \App\Http\Requests\StoreSnacksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSnacksRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Snacks  $snacks
     * @return \Illuminate\Http\Response
     */
    public function show(Snacks $snacks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Snacks  $snacks
     * @return \Illuminate\Http\Response
     */
    public function edit(Snacks $snacks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSnacksRequest  $request
     * @param  \App\Models\Snacks  $snacks
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSnacksRequest $request, Snacks $snacks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Snacks  $snacks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Snacks $snacks)
    {
        //
    }
}
