<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketRequest;
use App\Http\Resources\TicketsResource;
use App\Interfaces\SeatServiceInterface;
use App\Interfaces\TicketServiceInterface;
use App\Mail\TicketPurchasedSuccessfully;
use App\Models\Tickets;
use App\Http\Requests\StoreTicketsRequest;
use App\Http\Requests\UpdateTicketsRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class TicketsController extends Controller
{
    private TicketServiceInterface $ticketService;
    private SeatServiceInterface $seatService;

    public function __construct(TicketServiceInterface $ticketService, SeatServiceInterface $seatService)
    {
        $this->ticketService = $ticketService;
        $this->seatService = $seatService;
    }


    public function index()
    {
        return TicketsResource::collection($this->ticketService->RetrieveAllTickets());
    }

    public function create(TicketRequest $ticketRequest)
    {


        $generatedTicketNumbers = [];
        $ticketRequests = $ticketRequest->all();

        foreach ($ticketRequests as $item) {


            $generatedTicketNumbers[] = $this->ticketService->BookTicket($item);


        }


        return response()->json($generatedTicketNumbers);

    }


    public function store(TicketRequest $request)
    {
        Mail::to('ochieng088@gmail.com')->send(new TicketPurchasedSuccessfully());
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Tickets $tickets
     * @return \Illuminate\Http\Response
     */
    public function show(Tickets $tickets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Tickets $tickets
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
