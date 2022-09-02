<?php

namespace App\Repository;

use App\Interfaces\TicketsBoughtRepositoryInterface;
use App\Models\Tickets;

class TicketsBoughtRepository implements TicketsBoughtRepositoryInterface
{

    public function FindTicketsBoughtHistory($email_addresses)
    {
        return Tickets::where('email_Address','=',$email_addresses)->get();
    }
}
