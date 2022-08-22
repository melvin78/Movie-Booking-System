<?php

namespace App\Http\Controllers;

use App\Http\Resources\CinemaResource;
use App\Http\Resources\MoviePlotAndRuntimeResource;
use App\Interfaces\CinemaServiceInterface;
use App\Models\Cinemas;
use App\Http\Requests\StoreCinemasRequest;
use App\Http\Requests\UpdateCinemasRequest;
use Illuminate\Http\Response;

class CinemasController extends Controller
{
    private CinemaServiceInterface $cinemaService;

    public function __construct(CinemaServiceInterface $cinemaService)
    {
        $this->cinemaService = $cinemaService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return CinemaResource::collection($this->cinemaService->RetrieveCinemas());
    }


    public function cinemaname($id){

        return $this->cinemaService->GetCinemaName($id);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCinemasRequest  $request
     * @return Response
     */
    public function store(StoreCinemasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cinemas  $cinemas
     * @return Response
     */
    public function show(Cinemas $cinemas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cinemas  $cinemas
     * @return Response
     */
    public function edit(Cinemas $cinemas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCinemasRequest  $request
     * @param  \App\Models\Cinemas  $cinemas
     * @return Response
     */
    public function update(UpdateCinemasRequest $request, Cinemas $cinemas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cinemas  $cinemas
     * @return Response
     */
    public function destroy(Cinemas $cinemas)
    {
        //
    }
}
