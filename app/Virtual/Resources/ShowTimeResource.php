<?php

namespace App\Virtual\Resources;

use App\Virtual\Models\ShowTime;

/**
 * @OA\Schema(
 *     title="ShowTime Resource",
 *     description="ShowTime Resource",
 *     @OA\Xml(
 *         name="ShowTime Resource"
 *     )
 * )
 */
class ShowTimeResource
{

    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var ShowTime
     */

    public ShowTime $data;
}
