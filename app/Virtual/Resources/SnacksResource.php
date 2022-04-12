<?php

namespace App\Virtual\Resources;

use App\Virtual\Models\Snacks;

/**
 * @OA\Schema(
 *     title="Snacks Resource",
 *     description="Snacks Resource",
 *     @OA\Xml(
 *         name="Snacks Resource"
 *     )
 * )
 */
class SnacksResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var Snacks[]
     */

    public array $data;
}
