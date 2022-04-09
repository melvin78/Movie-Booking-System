<?php

namespace App\Interfaces;

interface SnackServiceInterface
{

    public function SnacksOnShelf();

    public function SnacksPrice($snack_name);

    public function GetSnackId($snack_name);
}
