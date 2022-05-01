<?php

namespace App\Interfaces;

interface SeatServiceInterface
{

    public function SeatsAvailableByCinema($cinema_id);

    public function SeatsUnavailableByCinema($cinema_id);

    public function AllSeats();

    public function MakeAllSeatsAvailableByCinema($cinema_id);

    public function MakeAllSeatsUnAvailableByCinema($cinema_id);

    public function MakeSeatAvailableByCinema($cinema_id,$seat_no);

    public function BookSeat($cinema_id,$seatno);

    public function MakeAllSeatsUnavailable();

    public function MakeAllSeatsAvailable();

    public function GetSeatIdentity($cinema_id,$seat_id);


}
