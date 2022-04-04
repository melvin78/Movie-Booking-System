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
}
