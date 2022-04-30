<?php

namespace App\Services;

use App\Interfaces\SeatRepositoryInterface;
use App\Interfaces\SeatServiceInterface;
use function Symfony\Component\Translation\t;

class SeatService implements SeatServiceInterface
{
    private SeatRepositoryInterface $seatRepository;

    public function __construct(SeatRepositoryInterface $seatRepository)
    {

        $this->seatRepository = $seatRepository;
    }

    public function SeatsAvailableByCinema($cinema_id)
    {
        return $this->seatRepository->FindSeatsAvailableByCinemaId($cinema_id);
    }

    public function SeatsUnavailableByCinema($cinema_id)
    {
        return $this->seatRepository->FindSeatsUnavailableByCinemaId($cinema_id);
    }

    public function AllSeats()
    {

        return $this->seatRepository->FindAllSeats();
    }

    public function MakeAllSeatsAvailableByCinema($cinema_id)
    {
        return $this->seatRepository->UnSetSeatsIsBookedByCinema($cinema_id);
    }

    public function MakeSeatAvailableByCinema($cinema_id, $seat_no)
    {
        return $this->seatRepository->UnSetSeatIsBookedByCinema($cinema_id,$seat_no);
    }

    public function BookSeat($cinema_id, $seatno)
    {

        return $this->seatRepository->SetSeatIsBooked($cinema_id,$seatno);
    }

    public function MakeAllSeatsUnavailable()
    {
        return $this->seatRepository->SetSeatsIsBooked();
    }

    public function MakeAllSeatsAvailable()
    {

        return $this->seatRepository->UnSetSeatsIsBooked();
    }
}