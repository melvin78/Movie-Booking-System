<?php

namespace App\Interfaces;

interface SnackRepositoryInterface
{

    public function  FindAllSnacks();

    public function FindSnackPriceBySnackName($snack_name);

    public function FindSnackIdBySnackName($snack_name);
}
