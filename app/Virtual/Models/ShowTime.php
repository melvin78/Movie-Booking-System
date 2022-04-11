<?php

namespace App\Virtual\Models;

/**
 * @OA\Schema(
 *     title="ShowTime",
 *     description="ShowTime",
 *     @OA\Xml(
 *         name="ShowTime"
 *     )
 * )
 */
class ShowTime
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
     *     title="Start Time",
     *     description="Start Time of Movie",
     *     example="17:00",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    public \DateTime $time_from;

    /**
     * @OA\Property(
     *     title="End Time",
     *     description="End Time of Movie",
     *     example="21:00",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    public \DateTime $time_to;

}
