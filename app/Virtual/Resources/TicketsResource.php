<?php

namespace App\Virtual\Resources;
use App\Virtual\Models\Tickets;
/**
 * @OA\Schema(
 *     title="Tickets Resource",
 *     description="Tickets Resource",
 *     @OA\Xml(
 *         name="Tickets Resource"
 *     )
 * )
 */
class TicketsResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var Tickets
     */

    public Tickets $data;
}
