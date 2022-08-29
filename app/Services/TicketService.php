<?php

namespace App\Services;

use App\Http\Resources\TicketsResource;
use App\Interfaces\CinemaServiceInterface;
use App\Interfaces\DrinkServiceInterface;
use App\Interfaces\FastFoodServiceInterface;
use App\Interfaces\MovieServiceInterface;
use App\Interfaces\SeatServiceInterface;
use App\Interfaces\ShowTimeServiceInterface;
use App\Interfaces\SnackServiceInterface;
use App\Interfaces\TicketServiceInterface;
use App\Repository\TicketRepository;
use App\Utils\CalculateTotalPrice;
use App\Utils\GenerateTicketNumber;
use Carbon\Carbon;

class TicketService implements TicketServiceInterface
{


    private TicketRepository $ticketRepository;
    private ShowTimeServiceInterface $showTimeService;
    private CinemaServiceInterface $cinemaService;
    private SnackServiceInterface $snackService;
    private DrinkServiceInterface $drinkService;
    private FastFoodService $fastFoodService;
    private MovieServiceInterface $movieService;
    private SeatServiceInterface $seatService;

    public function __construct(TicketRepository         $ticketRepository,
                                ShowTimeServiceInterface $showTimeService,
                                CinemaServiceInterface   $cinemaService,
                                SnackServiceInterface    $snackService,
                                DrinkServiceInterface    $drinkService,
                                FastFoodServiceInterface $fastFoodService,
                                SeatServiceInterface     $seatService,
                                MovieServiceInterface    $movieService)
    {

        $this->ticketRepository = $ticketRepository;
        $this->showTimeService = $showTimeService;
        $this->cinemaService = $cinemaService;
        $this->snackService = $snackService;
        $this->drinkService = $drinkService;
        $this->fastFoodService = $fastFoodService;
        $this->movieService = $movieService;
        $this->seatService = $seatService;
    }


    public function RetrieveAllTickets(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->ticketRepository->FindAllTickets();
    }


    public function BookTicket(array $ticket_details)
    {
        $showtime_id = $this->showTimeService->SpecificShowTimeId($ticket_details['time_from'], $ticket_details['time_to']);
        $cinema_short_code = $this->cinemaService->GetCinemaShortCode($ticket_details['cinema']);
        $movie_short_code = $this->movieService->MovieShortCode($ticket_details['movie_name']);
        $movie_id = $this->movieService->MovieId($ticket_details['movie_name']);
        $cinema_id = $this->cinemaService->GetCinemaId($ticket_details['cinema']);
        $seat_id = $this->seatService->GetSeatIdentity($cinema_id, $ticket_details['seat_number']);


        if (isset($ticket_details['snacks'])) {
            $snack_price = $this->snackService->SnacksPrice($ticket_details['snacks']);
            $snack_id = $this->snackService->GetSnackId($ticket_details['snacks']);


        }
        if (isset($ticket_details['drinks'])) {
            $drink_price = $this->drinkService->GetDrinkPrice($ticket_details['drinks']);
            $drink_id = $this->drinkService->GetDrinkId($ticket_details['drinks']);


        }

        if (isset($ticket_details['fast_food'])) {
            $fast_food_price = $this->fastFoodService->GetFastFoodPrice($ticket_details['fast_food']);
            $fast_food_id = $this->fastFoodService->GetFastFoodId($ticket_details['fast_food']);


        }


        $ticket_number = GenerateTicketNumber::GenerateTicketNumber($cinema_short_code, $movie_short_code);

        $save_ticket_details =
            [
                "movie_id" => $movie_id,
                "email_address" => $ticket_details['email_address'],
                "first_name" => $ticket_details['first_name'],
                "second_name" => $ticket_details['second_name'],
                "cinema_id" => $cinema_id,
                "show_time_id" => $showtime_id,
                "ticketnumber" => $ticket_number,
                "seat_id" => $seat_id,
                "price" => $this->movieService->MoviePrice($movie_id)
            ];


        $tickets_Saved = $this->ticketRepository->AddTickets($save_ticket_details);

        $this->seatService->MakeSeatUnavailable($cinema_id,$ticket_details['seat_number']);

        return [

            'ticketNumber' => $tickets_Saved['ticketnumber'],
            'SeatNo' => $this->seatService->GetSeatNumber($tickets_Saved['seat_id']),
            'Price' => $tickets_Saved['price'],
            'StartTime' => Carbon::createFromFormat('H:i:s', $ticket_details['time_from'], 'UTC')->format('h:i A'),
            'Endtime' => Carbon::createFromFormat('H:i:s', $ticket_details['time_to'], 'UTC')->format('h:i A'),
            'MovieName' => $ticket_details['movie_name'],
            'CinemaName' => $ticket_details['cinema'],
            'MovieTitle' => $ticket_details['movie_name'],

        ];


    }


    public function ChangeScheduleTicket($ticketId, array $ticket_details)
    {
        // TODO: Implement ChangeScheduleTicket() method.
    }
}
