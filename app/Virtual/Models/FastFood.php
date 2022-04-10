<?php

namespace App\Virtual\Models;

/**
 * @OA\Schema(
 *     title="Fast Food",
 *     description="Fast Food model",
 *     @OA\Xml(
 *         name="Fast Food"
 *     )
 * )
 */

class FastFood
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
     *      title="Fast Food",
     *      description="Name of fastfood",
     *      example="Burger,Fries,Sausages"
     * )
     *
     * @var string
     */
    private string $description;

    /**
     * @OA\Property(
     *     title="Fast food",
     *     description="Price of fast food",
     *     format="float",
     *     example=1.05
     * )
     *
     * @var float
     */
    private float $price;

}
