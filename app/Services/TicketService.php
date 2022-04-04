<?php

namespace App\Services;

use App\Http\Resources\TicketsResource;
use App\Interfaces\TicketServiceInterface;
use App\Repository\TicketRepository;

class TicketService implements TicketServiceInterface
{


    private TicketRepository $ticketRepository;

    public function __construct(TicketRepository $ticketRepository)
    {

        $this->ticketRepository = $ticketRepository;
    }


    public function RetrieveAllTickets(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->ticketRepository->FindAllTickets();
    }


    public function BookTicket(array $ticket_details)
    {
        // TODO: Implement BookTicket() method.
    }

    public function ChangeScheduleTicket($ticketId, array $ticket_details)
    {
        // TODO: Implement ChangeScheduleTicket() method.
    }
}
