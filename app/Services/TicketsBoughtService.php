<?php

namespace App\Services;

use App\Interfaces\TicketsBoughtRepositoryInterface;

class TicketsBoughtService implements  TicketsBoughtRepositoryInterface
{


    private TicketsBoughtRepositoryInterface $ticketsBoughtRepository;

    public function __construct(TicketsBoughtRepositoryInterface $ticketsBoughtRepository)
    {
        $this->ticketsBoughtRepository = $ticketsBoughtRepository;
    }

    public function FindTicketsBoughtHistory($email_addresses)
    {
        return $this->ticketsBoughtRepository->FindTicketsBoughtHistory($email_addresses);
    }
}
