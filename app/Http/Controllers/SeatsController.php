<?php

namespace App\Http\Controllers;

use App\Http\Requests\CinemaSeatsRequest;
use App\Http\Resources\SeatsResource;
use App\Models\seats;
use App\Http\Requests\StoreseatsRequest;
use App\Http\Requests\UpdateseatsRequest;
use App\Services\SeatService;
use http\Env\Response;

class SeatsController extends Controller
{

    private SeatService $seatService;

    public function __construct(SeatService $seatService)
    {
        $this->seatService = $seatService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(CinemaSeatsRequest $cinemaSeatsRequest)
    {

        $validated = $cinemaSeatsRequest->validated();


        return SeatsResource::collection($this->seatService->AllSeatsByCinemaId($validated["CinemaId"]));
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
