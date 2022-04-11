<?php

namespace App\Virtual\Resources;


use App\Virtual\Models\Drink;

/**
 * @OA\Schema(
 *     title="DrinksResource",
 *     description="Drink resource",
 *     @OA\Xml(
 *         name="Drink Resource"
 *     )
 * )
 */

class DrinkResource
{

    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var Drink
     */

    private Drink $data;

}
