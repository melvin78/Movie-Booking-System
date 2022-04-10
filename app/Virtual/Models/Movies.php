<?php

namespace App\Virtual\Models;


/**
 * @OA\Schema(
 *     title="Movies",
 *     description="Movies",
 *     @OA\Xml(
 *         name="Movies"
 *     )
 * )
 */
class Movies
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
     *      title="Movie ",
     *      description="Name of movie",
     *      example="No way home,Titanic,Morbius"
     * )
     *
     * @var string
     */

    public string $movie_name;

    /**
     * @OA\Property(
     *      title="Running Time of Movie ",
     *      description=" Total hours before end of movie",
     *      example="2HRS AND 30 MINS, 2HRS AND 45 MINS"
     * )
     *
     * @var string
     */
    public string $running_time;

    /**
     * @OA\Property(
     *      title="Cast",
     *      description="Actor names,ratings and images",
     *      example="{"name":"Tom Holland","image":"url link to profile picture","imdblink":"https://www.imdb.com/name/nm0000474/"}"
     * )
     *
     * @var string
     */
    public string $cast;

    /**
     * @OA\Property(
     *     title="imdb rating",
     *     description="movies rating on imdb",
     *     format="int64",
     *     example=13
     * )
     *
     * @var integer
     */
    public int $imdb_rating;

    /**
     * @OA\Property(
     *     title="tomato score",
     *     description="movies tomato score on tomatometer",
     *     format="int64",
     *     example=98%
     * )
     *
     * @var integer
     */
    public int $tomato_meter;

    /**
     * @OA\Property(
         *     title="Parent Id",
     *     description="If value is set represents the prequel to the current movie",
     *     format="int64",
     *     example=4
     * )
     *
     * @var integer
     */
    public int $parent_id;

    /**
     * @OA\Property(
     *     title="age limit Id",
     *     description="age limit id of movie",
     *     format="int64",
     *     example=4
     * )
     *
     * @var integer
     */
    public int $age_limit_id;

    /**
     * @OA\Property(
     *     title="genre Id",
     *     description="represents the genre of the movie",
     *     format="int64",
     *     example=4
     * )
     *
     * @var integer
     */
    public $genre_id;

    /**
     * @OA\Property(
     *     title="Premiere Date",
     *     description="Date movie premiered in cinemas",
     *     example="2022-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    public \DateTime $premier_date;

    /**
     * @OA\Property(
     *      title="Short Code",
     *      description="Unique Code to represent movie",
     * )
     *
     * @var string
     */
    public string $short_code;

}
