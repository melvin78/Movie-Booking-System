<?php

namespace App\Services;

use App\Http\Resources\TicketsResource;
use App\Interfaces\CinemaServiceInterface;
use App\Interfaces\DrinkServiceInterface;
use App\Interfaces\FastFoodServiceInterface;
use App\Interfaces\MovieServiceInterface;
use App\Interfaces\ShowTimeServiceInterface;
use App\Interfaces\SnackServiceInterface;
use App\Interfaces\TicketServiceInterface;
use App\Repository\TicketRepository;
use App\Utils\GenerateTicketNumber;

class TicketService implements TicketServiceInterface
{


    private TicketRepository $ticketRepository;
    private ShowTimeServiceInterface $showTimeService;
    private CinemaServiceInterface $cinemaService;
    private SnackServiceInterface $snackService;
    private DrinkServiceInterface $drinkService;
    private FastFoodService $fastFoodService;
    private MovieServiceInterface $movieService;

    public function __construct(TicketRepository         $ticketRepository,
                                ShowTimeServiceInterface $showTimeService,
                                CinemaServiceInterface   $cinemaService,
                                SnackServiceInterface    $snackService,
                                DrinkServiceInterface    $drinkService,
                                FastFoodServiceInterface $fastFoodService,
                                MovieServiceInterface    $movieService)
    {

        $this->ticketRepository = $ticketRepository;
        $this->showTimeService = $showTimeService;
        $this->cinemaService = $cinemaService;
        $this->snackService = $snackService;
        $this->drinkService = $drinkService;
        $this->fastFoodService = $fastFoodService;
        $this->movieService = $movieService;
    }


    public function RetrieveAllTickets(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->ticketRepository->FindAllTickets();
    }


    public function BookTicket(array $ticket_details)
    {
        $showtime_id = $this->showTimeService->SpecificShowTimeId($ticket_details['time_from'],$ticket_details['time_to']);
        $cinema_short_code= $this->cinemaService->GetCinemaShortCode($ticket_details['cinema']);
        $movie_short_code= $this->movieService->MovieShortCode($ticket_details['movie_name']);
        $movie_id = $this->movieService->MovieId($ticket_details['movie_name']);
        $cinema_id= $this->cinemaService->GetCinemaId($ticket_details['cinema']);
        $ticket_price= $this->showTimeService->GetMovieTicketPrice($ticket_details['time_from'],$ticket_details['time_to']);
        $ticket_number= GenerateTicketNumber::GenerateTicketNumber($cinema_short_code,$movie_short_code);

    }

    public function ChangeScheduleTicket($ticketId, array $ticket_details)
    {
        // TODO: Implement ChangeScheduleTicket() method.
    }
}
