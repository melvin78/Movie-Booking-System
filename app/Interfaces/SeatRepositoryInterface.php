<?php

namespace App\Interfaces;

interface SeatRepositoryInterface
{

    public function FindSeatsAvailableByCinemaId($cinema_id);

    public function  FindSeatsUnavailableByCinemaId($cinema_id);

    public function FindAllSeats();

    public function UnSetSeatsIsBookedByCinema($cinema_id);

    public function UnSetSeatIsBookedByCinema($cinema_id,$seat_no);

    public function SetSeatIsBooked($cinema_id,$seat_no);

    public function SetSeatsIsBooked();

    public function UnSetSeatsIsBooked();
}
