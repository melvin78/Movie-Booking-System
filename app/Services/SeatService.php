<?php

namespace App\Services;

use App\Interfaces\SeatServiceInterface;

class SeatService implements SeatServiceInterface
{

    public function SeatsAvailableByCinema($cinema_id)
    {
        // TODO: Implement SeatsAvailableByCinema() method.
    }

    public function SeatsUnavailableByCinema($cinema_id)
    {
        // TODO: Implement SeatsUnavailableByCinema() method.
    }

    public function AllSeats()
    {
        // TODO: Implement AllSeats() method.
    }

    public function MakeAllSeatsAvailableByCinema($cinema_id)
    {
        // TODO: Implement MakeAllSeatsAvailableByCinema() method.
    }

    public function MakeSeatAvailableByCinema($cinema_id, $seat_no)
    {
        // TODO: Implement MakeSeatAvailableByCinema() method.
    }

    public function BookSeat($cinema_id, $seatno)
    {
        // TODO: Implement BookSeat() method.
    }

    public function MakeAllSeatsUnavailable()
    {
        // TODO: Implement MakeAllSeatsUnavailable() method.
    }

    public function MakeAllSeatsAvailable()
    {
        // TODO: Implement MakeAllSeatsAvailable() method.
    }
}
