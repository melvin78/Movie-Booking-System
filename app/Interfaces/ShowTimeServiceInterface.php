<?php

namespace App\Interfaces;

interface ShowTimeServiceInterface
{

    public function AllShowingTimes();

    public function SpecificShowTimeId($time_from,$time_to);

    public function GetMovieTicketPrice($time_from,$time_to);
}
