<?php

namespace App\Services;

use App\Interfaces\SnackRepositoryInterface;
use App\Interfaces\SnackServiceInterface;

class SnacksService implements SnackServiceInterface
{


    private SnackRepositoryInterface $snackRepository;

    public function __construct(SnackRepositoryInterface $snackRepository)
    {

        $this->snackRepository = $snackRepository;
    }

    public function SnacksOnShelf()
    {
        return $this->snackRepository->FindAllSnacks();
    }

    public function SnacksPrice($snack_name)
    {
        return $this->snackRepository->FindSnackPriceBySnackName($snack_name);
    }

    public function GetSnackId($snack_name)
    {
        return $this->snackRepository->FindSnackIdBySnackName($snack_name);
    }
}
