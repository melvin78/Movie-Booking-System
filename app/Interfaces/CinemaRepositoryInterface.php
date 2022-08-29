<?php

namespace App\Interfaces;

interface CinemaRepositoryInterface
{

    public function FindCinemas();

    public function FindCinemaByName($cinema_name);

    public function FindCinemaById($cinema_name);

    public function FindCinemaNameByCinemaId ($cinema_id);
}

