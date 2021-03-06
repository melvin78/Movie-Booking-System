<?php

namespace App\Virtual\Resources;


use App\Virtual\Models\FastFood;

/**
 * @OA\Schema(
 *     title="FastFood Resource",
 *     description="Fast Food Resource",
 *     @OA\Xml(
 *         name="Fast Food Resource"
 *     )
 * )
 */

class FastFoodResurce
{

    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var FastFood[]
     */

    private array $data;


}
