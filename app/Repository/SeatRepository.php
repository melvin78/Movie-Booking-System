<?php

namespace App\Repository;

use App\Interfaces\SeatRepositoryInterface;

class SeatRepository implements SeatRepositoryInterface
{

    public function FindSeatsAvailableByCinemaId($cinema_id)
    {
        // TODO: Implement FindSeatsAvailableByCinemaId() method.
    }

    public function FindSeatsUnavailableByCinemaId($cinema_id)
    {
        // TODO: Implement FindSeatsUnavailableByCinemaId() method.
    }

    public function FindAllSeats()
    {
        // TODO: Implement FindAllSeats() method.
    }

    public function UnSetSeatsIsBookedByCinema($cinema_id)
    {
        // TODO: Implement UnSetSeatsIsBookedByCinema() method.
    }

    public function UnSetSeatIsBookedByCinema($cinema_id, $seat_no)
    {
        // TODO: Implement UnSetSeatIsBookedByCinema() method.
    }

    public function SetSeatIsBooked($cinema_id, $seat_no)
    {
        // TODO: Implement SetSeatIsBooked() method.
    }

    public function SetSeatsIsBooked()
    {
        // TODO: Implement SetSeatsIsBooked() method.
    }

    public function UnSetSeatsIsBooked()
    {
        // TODO: Implement UnSetSeatsIsBooked() method.
    }
}
