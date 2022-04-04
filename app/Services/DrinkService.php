<?php

namespace App\Services;

use App\Interfaces\DrinkRepositoryInterface;
use App\Interfaces\DrinkServiceInterface;

class DrinkService implements DrinkServiceInterface
{

    private DrinkRepositoryInterface $drinkRepository;

    public function __construct(DrinkRepositoryInterface $drinkRepository)
    {
        $this->drinkRepository = $drinkRepository;
    }

    public function AvailableDrinks()
    {
        return $this->drinkRepository->FindAllDrinks();
    }
}
