<?php

namespace App\Virtual\Requests;

/**
 * @OA\Schema(
 *     title="Drink",
 *     description="Drink model",
 *     @OA\Xml(
 *         name="Drink"
 *     )
 * )
 */
class CinemaRequest
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
     *      title="Cinema",
     *      description="Name of the cinema",
     *      example="Anga Cinema, Imax, "
     * )
     *
     * @var string
     */
    public string $cinema;

    /**
     * @OA\Property(
     *      title="Location",
     *      description="Physical address of the cinema",
     *      example="Nairobi,Beijing, New York, London "
     * )
     *
     * @var string
     */
    public string $location;

    /**
     * @OA\Property(
     *     title="Capacity",
     *     description="Total capacity of cinema ",
     *     format="int64",
     *     example="1000 movie goers"
     * )
     *
     * @var integer
     */
    public  int $capacity;

    /**
     * @OA\Property(
     *     title="Cinema Short Code",
     *     description="Unique short code to identify cinema",
     *
     *     example="1000 movie goers"
     * )
     *
     * @var string
     */
    public string $short_code;

}
