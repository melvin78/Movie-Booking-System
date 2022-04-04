<?php

namespace App\Http\Controllers;

use App\Models\ShowTime;
use App\Http\Requests\StoreShowTimeRequest;
use App\Http\Requests\UpdateShowTimeRequest;
use App\Services\ShowTimeService;

class ShowTimeController extends Controller
{
    private ShowTimeService $showTimeService;

    public function __construct(ShowTimeService $showTimeService)
    {
        $this->showTimeService = $showTimeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->showTimeService->AllShowingTimes();
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
     * @param  \App\Http\Requests\StoreShowTimeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShowTimeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShowTime  $showTime
     * @return \Illuminate\Http\Response
     */
    public function show(ShowTime $showTime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShowTime  $showTime
     * @return \Illuminate\Http\Response
     */
    public function edit(ShowTime $showTime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShowTimeRequest  $request
     * @param  \App\Models\ShowTime  $showTime
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShowTimeRequest $request, ShowTime $showTime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShowTime  $showTime
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShowTime $showTime)
    {
        //
    }
}
