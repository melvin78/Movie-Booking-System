<?php

namespace App\Http\Controllers;

use App\Http\Requests\CinemaSeatsRequest;
use App\Http\Resources\SeatsResource;
use App\Services\ShowDateService;
use Illuminate\Http\Request;

class ShowDatesController extends Controller
{

    private ShowDateService $showDateService;

    public function __construct(ShowDateService $showDateService)
    {
        $this->showDateService = $showDateService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->showDateService->AllShowDates();
    }

}
