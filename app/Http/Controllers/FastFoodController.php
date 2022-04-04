<?php

namespace App\Http\Controllers;

use App\Http\Resources\FastFoodResource;
use App\Interfaces\FastFoodServiceInterface;
use App\Models\FastFood;
use App\Http\Requests\StoreFastFoodRequest;
use App\Http\Requests\UpdateFastFoodRequest;
use App\Services\FastFoodService;

class FastFoodController extends Controller
{
    private FastFoodService $fastFoodService;

    public function __construct(FastFoodService $fastFoodService)
    {
        $this->fastFoodService = $fastFoodService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return FastFoodResource::collection($this->fastFoodService->FastFoodsAvailable());
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
     * @param  \App\Http\Requests\StoreFastFoodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFastFoodRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FastFood  $fastFood
     * @return \Illuminate\Http\Response
     */
    public function show(FastFood $fastFood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FastFood  $fastFood
     * @return \Illuminate\Http\Response
     */
    public function edit(FastFood $fastFood)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFastFoodRequest  $request
     * @param  \App\Models\FastFood  $fastFood
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFastFoodRequest $request, FastFood $fastFood)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FastFood  $fastFood
     * @return \Illuminate\Http\Response
     */
    public function destroy(FastFood $fastFood)
    {
        //
    }
}
