<?php

namespace App\Interfaces;

interface TicketsBoughtServiceInterface
{

    public function GetAllTicketsByEmailAddress($email_address);
}
