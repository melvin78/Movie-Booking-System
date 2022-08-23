<?php

namespace App\Services;

use App\Interfaces\ShowDateServiceInterface;
use App\Interfaces\ShowDatesRepositoryInterface;
use function Symfony\Component\Translation\t;

class ShowDateService implements ShowDateServiceInterface
{


    private ShowDatesRepositoryInterface $showDatesRepository;

    public function __construct(ShowDatesRepositoryInterface $showDatesRepository)
    {
        $this->showDatesRepository = $showDatesRepository;
    }

    public function AllShowDates()
    {
        return $this->showDatesRepository->FindAllShowDates();
    }
}
