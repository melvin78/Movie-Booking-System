<?php

namespace App\Virtual\Requests;

/**
 * @OA\Schema(
 *      title="Snacks Tickets",
 *      description="Wrapper for snacks request",
 *      type="object",
 * )
 */
class SnacksRequest
{
    /**
     * @OA\Property(
     *     title="ID",
     *     description="ID",
     *     format="int64",
     *     example=1
     * )
     *
     * @var integer
     */

    private int $id;

    /**
     * @OA\Property(
     *     title="Created at",
     *     description="Created at",
     *     example="2022-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private \DateTime $created_at;

    /**
     * @OA\Property(
     *     title="Updated at",
     *     description="Updated at",
     *     example="2022-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private \DateTime $updated_at;

    /**
     * @OA\Property(
     *      title="Drink",
     *      description="Name of the drink",
     *      example="Pepsi,Coca Cola"
     * )
     *
     * @var string
     */
    private string $description;

    /**
     * @OA\Property(
     *     title="Price",
     *     description="Price of drink",
     *     format="float",
     *     example=1.05
     * )
     *
     * @var float
     */
    private float $price;
}
