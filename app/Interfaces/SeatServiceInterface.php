<?php

namespace App\Interfaces;

interface SeatServiceInterface
{

    public function SeatsAvailableByCinema($cinema_id);

    public function SeatsUnavailableByCinema($cinema_id);

    public function AllSeats();

    public function AllSeatsByCinemaId($cinema_id);

    public function MakeAllSeatsAvailableByCinema($cinema_id);

    public function MakeAllSeatsUnAvailableByCinema($cinema_id);

    public function MakeSeatAvailableByCinema($cinema_id,$seat_no);

    public function BookSeat($cinema_id,$seatno,$show_time_id);

    public function MakeAllSeatsUnavailable();

    public function MakeAllSeatsAvailable();

    public function GetSeatIdentity($cinema_id,$seat_id);

    public function GetSeatNumber($seat_id);

    public function MakeSeatUnavailable($cinema_id,$seat_no,$show_time_id);

    public function AllSeatsAvailableByShowTimeAndCinemaId ($cinema_id,$show_time_id);




}
