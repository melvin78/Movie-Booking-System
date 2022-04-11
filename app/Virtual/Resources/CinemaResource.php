<?php

namespace App\Virtual\Resources;

use App\Virtual\Models\Cinemas;

/**
 * @OA\Schema(
 *     title="CinemaResource",
 *     description="Cinema resource",
 *     @OA\Xml(
 *         name="Cinema Resource"
 *     )
 * )
 */
class CinemaResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var Cinemas
     */

    private Cinemas $data;
}
