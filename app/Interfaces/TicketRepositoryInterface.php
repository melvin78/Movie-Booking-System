<?php

namespace App\Interfaces;



interface TicketRepositoryInterface
{

    public function FindAllTickets();

    public function FindTicketsById($ticketId) ;

    public function FindTicketNumber($email,$ticketNo);

    public function AddTickets(array $ticketDetails);

    public function pdateTickets($ticketId, array $newDetails);

}
