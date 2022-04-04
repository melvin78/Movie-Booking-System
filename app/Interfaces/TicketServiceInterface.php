<?php

namespace App\Interfaces;

interface TicketServiceInterface
{

    public function RetrieveAllTickets();

    public function BookTicket(array $ticket_details);

    public function ChangeScheduleTicket($ticketId, array $ticket_details);
}
