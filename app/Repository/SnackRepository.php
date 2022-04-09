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


    public function FindSnackPriceBySnackName($snack_name)
    {
        return Snacks::where('description','=',$snack_name)
            ->value('price');
    }

    public function FindSnackIdBySnackName($snack_name)
    {
        return Snacks::where('description','=',$snack_name)
            ->value('id');
    }
}
