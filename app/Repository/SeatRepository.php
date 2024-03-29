<?php

namespace App\Repository;

use App\Interfaces\SeatRepositoryInterface;
use App\Models\seats;

class SeatRepository implements SeatRepositoryInterface
{

    public function FindSeatsAvailableByCinemaId($cinema_id): array
    {
        $finalInfo = [];

        $seatsInfo = seats::where('cinema_id', '=', $cinema_id)
            ->where('isBooked', '=', 0)
            ->get()
            ->chunk(49);

        for ($i = 0; $i <= 2; $i++) {
            $finalInfo[] = $seatsInfo[$i]->chunk(7);
        }

        return $finalInfo;


    }

    public function FindSeatsUnavailableByCinemaId($cinema_id)
    {
        return seats::where('cinema_id', '=', $cinema_id)
            ->where('isBooked', '=', 1)
            ->get();
    }

    public function FindAllSeats()
    {
        return seats::all();
    }

    public function UnSetSeatsIsBookedByCinema($cinema_id)
    {
        return seats::where('cinema_id', '=', $cinema_id)->update([
            "isBooked" => 0
        ]);

    }

    public function UnSetSeatIsBookedByCinema($cinema_id, $seat_no)
    {
        return seats::where('cinema_id', '=', $cinema_id)
            ->where('seat_number', '=', $seat_no)
            ->update([
                "isBooked" => 0
            ]);
    }


    public function SetSeatsIsBooked()
    {

        return seats::where('id', '>', 0)->update([
            "isBooked" => 1
        ]);
    }

    public function UnSetSeatsIsBooked()
    {
        return seats::where('id', '>', 0)->update([
            "isBooked" => 0
        ]);
    }

    public function SetSeatsIsBookedByCinema($cinema_id)
    {
        return seats::where('cinema_id', '=', $cinema_id)->update([
            "isBooked" => 1
        ]);
    }

    public function SetSeatIsBookedByCinema($cinema_id, $seat_no,$show_time_id)
    {
        return seats::where('cinema_id', '=', $cinema_id)
            ->where('seat_number', '=', $seat_no)
            ->where('show_time_id','=',$show_time_id)
            ->update([
                "isBooked" => 1
            ]);
    }

    public function FindSeatIdBySeatNameAndCinemaId($cinema_id, $seat_id)
    {
        return seats::where('cinema_id', '=', $cinema_id)
            ->where('seat_number', '=', $seat_id)
            ->value('id');
    }

    public function FindAllSeatsByCinemaId($cinema_id)
    {
        $finalInfo = [];

        $seatsInfo = seats::where('cinema_id', '=', $cinema_id)
            ->get()
            ->chunk(49);

        for ($i = 0; $i <= 2; $i++) {
            $finalInfo[] = $seatsInfo[$i]->chunk(7);
        }

        return $finalInfo;
    }

    public function FindSeatNoBySeatId($seat_id)
    {
        return seats::where('id','=',$seat_id)->value('seat_number');
    }

    public function FindAllSeatsByCinemaIdAndShowTimeID($cinema_id, $show_time_id): array
    {
        $finalInfo = [];

        $seatsInfo = seats::where('cinema_id', '=', $cinema_id)
            ->where('show_time_id','=',$show_time_id)
            ->get()
            ->chunk(49);


        for ($i = 0; $i <= 2; $i++) {
            $finalInfo[] = $seatsInfo[$i]->chunk(7);
        }

        return $finalInfo;

    }
}
