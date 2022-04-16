<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketRequest;
use App\Http\Resources\TicketsResource;
use App\Interfaces\TicketServiceInterface;
use App\Models\Tickets;
use App\Http\Requests\StoreTicketsRequest;
use App\Http\Requests\UpdateTicketsRequest;

class TicketsController extends Controller
{
    private TicketServiceInterface $ticketService;

    public function __construct(TicketServiceInterface $ticketService)
    {
        $this->ticketService = $ticketService;
    }


    public function index()
    {
        return TicketsResource::collection($this->ticketService->RetrieveAllTickets());
    }

    public function create()
    {
        $valid_ticket_request =
            [
                "movie_name"=>"Morbius",
                "email_address"=>"Melvin@gmail.com",
                "first_name"=>"melvin",
                "second_name"=>"ochieng",
                "cinema"=>"Anga Cinemas",
                "time_from"=>"08:00:00",
                "time_to"=>"10:00:00",
                "drinks"=>"pepsi",
                "snacks"=>"biscuits",
                "fast_food"=>"burger",
                "drinks_quantity"=>1,
                "snacks_quantity"=>2,
                "fast_food_quantity"=>3
            ];

        $response = $this->ticketService->BookTicket($valid_ticket_request);

        dd($response);

//        return response()->json([
//           'ticketno' => $response['ticketnumber']
//        ]);

    }


    public function store(TicketRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function show(Tickets $tickets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function edit(Tickets $tickets)
    {
        //
    }


    public function update(TicketRequest $request, Tickets $tickets)
    {
        //
    }


    public function destroy(Tickets $tickets)
    {
        //
    }
}
