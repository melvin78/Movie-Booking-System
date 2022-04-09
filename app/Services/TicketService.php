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
use App\Utils\CalculateTotalPrice;
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
        if(isset($ticket_details['snacks'])){
            $snack_price=$this->snackService->SnacksPrice($ticket_details['snacks']);
            $snack_id = $this->snackService->GetSnackId($ticket_details['snacks']);
        }
        if (isset($ticket_details['drinks'])){
            $drink_price= $this->drinkService->GetDrinkPrice($ticket_details['drinks']);
            $drink_id = $this->drinkService->GetDrinkId($ticket_details['drinks']);
        }

        if (isset($ticket_details['fast_food'])){
            $fast_food_price= $this->fastFoodService->GetFastFoodPrice($ticket_details['fast_food']);
            $fast_food_id = $this->fastFoodService->GetFastFoodId($ticket_details['fast_food']);
        }

        $ticket_price= $this->showTimeService->GetMovieTicketPrice($ticket_details['time_from'],$ticket_details['time_to']);
        $ticket_number= GenerateTicketNumber::GenerateTicketNumber($cinema_short_code,$movie_short_code);

        $save_ticket_details=
            [
                "movie_id"=>$movie_id,
                "email_address"=>$ticket_details['email_address'],
                "first_name"=>$ticket_details['first_name'],
                "second_name"=>$ticket_details['second_name'],
                "cinema_id"=>$cinema_id,
                "show_time_id"=>$showtime_id,
                "total_price"=>CalculateTotalPrice::TotalPrice($ticket_price,$drink_price,
                    $snack_price,$fast_food_price,$ticket_details['drinks_quantity'],
                    $ticket_details['snacks_quantity'],$ticket_details['fast_food_quantity']),
                "ticketnumber"=>$ticket_number,
                "drink_id"=>$drink_id,
                "fast_food_id"=>$fast_food_id,
                "snack_id"=>$snack_id,
                "drink_quantity"=>$ticket_details['drinks_quantity'],
                "fast_food_quantity"=>$ticket_details['fast_food_quantity'],
                "snack_quantity"=>$ticket_details['snacks_quantity'],

            ];

        return $this->ticketRepository->AddTickets($save_ticket_details);


    }


    public function ChangeScheduleTicket($ticketId, array $ticket_details)
    {
        // TODO: Implement ChangeScheduleTicket() method.
    }
}
