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

    public function GetDrinkPrice($drink_name)
    {
        return $this->drinkRepository->FindDrinkPrice($drink_name);
    }

    public function GetDrinkId($drink_name)
    {
        return $this->drinkRepository->FindDrinkId($drink_name);
    }
}
