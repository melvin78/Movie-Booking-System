<?php

namespace App\Services;

use App\Interfaces\ShowTimeRepositoryInterface;
use App\Interfaces\ShowTimeServiceInterface;

class ShowTimeService implements ShowTimeServiceInterface
{

    private ShowTimeRepositoryInterface $showTimeRepository;

    public function __construct(ShowTimeRepositoryInterface $showTimeRepository)
    {

        $this->showTimeRepository = $showTimeRepository;
    }


    public function AllShowingTimes()
    {

        return $this->showTimeRepository->FindAllShowTimes();

    }
}
