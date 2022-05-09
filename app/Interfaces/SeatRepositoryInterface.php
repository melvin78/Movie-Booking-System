<?php

namespace App\Interfaces;

interface SeatRepositoryInterface
{

    public function FindSeatsAvailableByCinemaId($cinema_id);

    public function  FindSeatsUnavailableByCinemaId($cinema_id);

    public function FindAllSeats();

    public function FindAllSeatsBySeatId($cinema_id);

    public function UnSetSeatsIsBookedByCinema($cinema_id);

    public function FindSeatIdBySeatNameAndCinemaId($cinema_id,$seat_id);

    public function UnSetSeatIsBookedByCinema($cinema_id,$seat_no);

    public function SetSeatsIsBookedByCinema($cinema_id);

    public function SetSeatIsBookedByCinema($cinema_id,$seat_no);

    public function SetSeatsIsBooked();

    public function UnSetSeatsIsBooked();
}
