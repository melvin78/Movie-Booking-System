<?php

namespace App\Interfaces;

interface CinemaServiceInterface
{

    public function RetrieveCinemas();

    public function GetCinemaShortCode($cinema_name);

    public function GetCinemaId($cinema_name);

    public function GetCinemaName ($cinema_id);
}
