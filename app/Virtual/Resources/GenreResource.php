<?php

namespace App\Virtual\Resources;
use App\Virtual\Models\Genre;

/**
 * @OA\Schema(
 *     title="Genre Resource",
 *     description="Genre Resource",
 *     @OA\Xml(
 *         name="Genre Resource"
 *     )
 * )
 */
class GenreResource
{/**
 * @OA\Property(
 *     title="Data",
 *     description="Data wrapper"
 * )
 *
 * @var Genre[]
 */

private array $data;

}
