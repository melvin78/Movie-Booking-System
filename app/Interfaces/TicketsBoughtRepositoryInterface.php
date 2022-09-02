<?php

namespace App\Interfaces;

interface TicketsBoughtRepositoryInterface
{

    public function FindTicketsBoughtHistory($email_addresses);

}
