<?php

namespace App\Repository;

use App\Interfaces\TicketRepositoryInterface;
use App\Models\Tickets;

class TicketRepository implements TicketRepositoryInterface
{


    public function FindAllTickets(): \Illuminate\Database\Eloquent\Collection
    {

        return Tickets::all();
    }

    public function FindTicketsById($ticketId)
    {
        // TODO: Implement FindTicketsById() method.
    }

    public function FindTicketNumber($email, $ticketNo)
    {
        // TODO: Implement FindTicketNumber() method.
    }

    public function AddTickets(array $ticketDetails)
    {

    }

    public function pdateTickets($ticketId, array $newDetails)
    {
        // TODO: Implement pdateTickets() method.
    }
}
