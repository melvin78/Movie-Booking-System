<?php

namespace App\Services;

use App\Interfaces\CinemaRepositoryInterface;
use App\Interfaces\CinemaServiceInterface;
use App\Models\Cinemas;

class CinemaService implements CinemaServiceInterface
{
    private CinemaRepositoryInterface $cinemaRepository;

    /**
     * @param CinemaRepositoryInterface $cinemaRepository
     */
    public function __construct(CinemaRepositoryInterface $cinemaRepository)
    {

        $this->cinemaRepository = $cinemaRepository;
    }

    public function RetrieveCinemas()
    {
        return $this->cinemaRepository->FindCinemas();
    }

    public function GetCinemaShortCode($cinema_name)
    {
        return $this->cinemaRepository->FindCinemaByName($cinema_name);
    }

    public function GetCinemaId($cinema_name)
    {

        return $this->cinemaRepository->FindCinemaById($cinema_name);
    }

    public function GetCinemaName($cinema_id)
    {
        return $this->cinemaRepository->FindCinemaNameByCinemaId($cinema_id);
    }
}
