<?php

namespace App\Virtual\Resources;


use App\Virtual\Models\Movies;

/**
 * @OA\Schema(
 *     title="Movie Resource",
 *     description="Movie Resource",
 *     @OA\Xml(
 *         name="Movie Resource"
 *     )
 * )
 */
class MoviesResource
{

    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var Movies
     */

    private Movies $data;
}
