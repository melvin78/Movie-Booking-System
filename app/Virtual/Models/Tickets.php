<?php

namespace App\Virtual\Models;
/**
 * @OA\Schema(
 *     title="Tickets",
 *     description="Tickets Model",
 *     @OA\Xml(
 *         name="Tickets"
 *     )
 * )
 */
class Tickets
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
     *      title="Movie",
     *      description=Name of movie being watched,
     *      example="Spiderman,No Way Home"
     * )
     *
     * @var string
     */
    public string $movie_id;

    /**
     * @OA\Property(
     *      title="Email Address",
     *      description=Email Address of user purchased ticket,
     *      example="cinemauser@webmelvin.me"
     * )
     *
     * @var string
     */
    public string $email_address;

    /**
     * @OA\Property(
     *      title="First Name",
     *      description=First Name of Movie Goer,
     *      example="Melvin"
     * )
     *
     * @var string
     */

    public string $first_name;

    /**
     * @OA\Property(
     *      title="Seconf Name",
     *      description=Second Name of Movie Goer,
     *      example="Odhiambo"
     * )
     *
     * @var string
     */
    public string $second_name;

    /**
     * @OA\Property(
     *      title="Cinema Name",
     *      description=Cinema Name Showing Movie,
     *      example="Imax 20th Century"
     * )
     *
     * @var string
     */
    public string $cinema_id;


    /**
     * @OA\Property(
     *      title="Show Time of Movie",
     *      description=Time movie is being shown,
     *      example="17-00-20.30"
     * )
     *
     * @var string
     */
    public string $show_time_id;


    /**
     * @OA\Property(
     *      title="Total Price",
     *      description=Price of ticket including food ordered,
     *      example="18.00"
     * )
     *
     * @var string
     */
    public string $total_price;

    /**
     * @OA\Property(
     *      title="Ticket Number",
     *      description=Auto generated ticket number,
     *      example="IM-902314-SN"
     * )
     *
     * @var string
     */
    public string $ticketnumber;

    public $offer_id;

    /**
     * @OA\Property(
     *      title="Drink Ordered",
     *      description=Drinks Ordered,
     *      example="Melvin"
     * )
     *
     * @var string
     */
    public string $drink_id;
    /**
     * @OA\Property(
     *      title="Fast Food Ordered",
     *      description=Fast food,
     *      example="Pepsi"
     * )
     *
     * @var string
     */
    public string $fastfood_id;

    /**
     * @OA\Property(
     *      title="Snacks",
     *      description=Snack Ordere,
     *      example="Burger"
     * )
     *
     * @var string
     */

    public string $snack_id;


    /**
     * @OA\Property(
     *      title="Amount Of Drinks Ordered",
     *      description="Amount of drinks",
     *      example="4 coke bottles"
     * )
     *
     * @var string
     */

    public string $drink_quantity;


    /**
     * @OA\Property(
     *      title="Fast Food Ordered",
     *      description="Quantity of fast food ordered",
     *      example="4 burgers"
     * )
     *
     * @var string
     */
    public string $fast_food_quantity;

    /**
     * @OA\Property(
     *      title="Snacks Ordered,
     *      description="Quantity of snacks ordered",
     *      example="5 cotton candy"
     * )
     *
     * @var string
     */
    public string $snack_quantity;




}
