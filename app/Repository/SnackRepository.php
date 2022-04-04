<?php

namespace App\Repository;

use App\Interfaces\SnackRepositoryInterface;
use App\Models\Snacks;

class SnackRepository implements SnackRepositoryInterface
{

    public function FindAllSnacks(): \Illuminate\Database\Eloquent\Collection
    {

        return Snacks::all();
    }
}
