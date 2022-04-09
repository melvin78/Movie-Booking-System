<?php

namespace App\Services;

use App\Interfaces\FastFoodRepositoryInterface;
use App\Interfaces\FastFoodServiceInterface;
use function Symfony\Component\Translation\t;

class FastFoodService implements FastFoodServiceInterface
{

    private FastFoodRepositoryInterface $fastFoodRepository;

    public function __construct(FastFoodRepositoryInterface $fastFoodRepository)
    {
        $this->fastFoodRepository = $fastFoodRepository;
    }

    public function FastFoodsAvailable()
    {
        return $this->fastFoodRepository->FindAllFastFoods();
    }

    public function GetFastFoodPrice($fast_food_name)
    {
        return $this->fastFoodRepository->FindPriceByFastFoodName($fast_food_name);
    }

    public function GetFastFoodId($fast_food_name)
    {
        return $this->fastFoodRepository->FindIdByFastFoodName($fast_food_name);
    }
}
