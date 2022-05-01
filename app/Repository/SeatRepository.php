<?php

namespace App\Repository;

use App\Interfaces\SeatRepositoryInterface;
use App\Models\seats;

class SeatRepository implements SeatRepositoryInterface
{

    public function FindSeatsAvailableByCinemaId($cinema_id)
    {
        return seats::where('cinema_id','=',$cinema_id)
            ->where('isBooked','=',0)
            ->get();
    }

    public function FindSeatsUnavailableByCinemaId($cinema_id)
    {
        return seats::where('cinema_id','=',$cinema_id)
            ->where('isBooked','=',1)
            ->get();
    }

    public function FindAllSeats()
    {
        return seats::all();
    }

    public function UnSetSeatsIsBookedByCinema($cinema_id)
    {
       return seats::where('cinema_id','=',$cinema_id)->update([
           "isBooked"=>0
       ]);

    }

    public function UnSetSeatIsBookedByCinema($cinema_id, $seat_no)
    {
        return seats::where('cinema_id','=',$cinema_id)
            ->where('seat_number','=',$seat_no)
            ->update([
            "isBooked"=>0
        ]);
    }



    public function SetSeatsIsBooked()
    {

        return seats::where('id','>',0)->update([
            "isBooked"=> 1
        ]);
    }

    public function UnSetSeatsIsBooked()
    {
        return seats::where('id','>',0)->update([
            "isBooked"=>0
        ]);
    }

    public function SetSeatsIsBookedByCinema($cinema_id)
    {
        return seats::where('cinema_id','=',$cinema_id)->update([
            "isBooked"=>1
        ]);
    }

    public function SetSeatIsBookedByCinema($cinema_id, $seat_no)
    {
        return seats::where('cinema_id','=',$cinema_id)
            ->where('seat_number','=',$seat_no)
            ->update([
                "isBooked"=>1
            ]);
    }

    public function FindSeatIdBySeatNameAndCinemaId($cinema_id, $seat_id)
    {
       return seats::where('cinema_id','=',$cinema_id)
           ->where('seat_number','=',$seat_id)
           ->value('id');
    }
}
