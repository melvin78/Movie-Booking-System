<?php

namespace App\Interfaces;

interface SeatRepositoryInterface
{

    public function FindSeatsAvailableByCinemaId($cinema_id);

    public function  FindSeatsUnavailableByCinemaId($cinema_id);

    public function FindAllSeats();

    public function FindAllSeatsByCinemaId($cinema_id);

    public function FindAllSeatsByCinemaIdAndShowTimeID ($cinema_id,$show_time_id);

    public function UnSetSeatsIsBookedByCinema($cinema_id);

    public function FindSeatIdBySeatNameAndCinemaId($cinema_id,$seat_id);

    public function UnSetSeatIsBookedByCinema($cinema_id,$seat_no);

    public function SetSeatsIsBookedByCinema($cinema_id);

    public function SetSeatIsBookedByCinema($cinema_id,$seat_no,$show_time_id);

    public function SetSeatsIsBooked();

    public function UnSetSeatsIsBooked();

    public function FindSeatNoBySeatId($seat_id);
}
