<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [

            'id'=> $this->id,
            'Image'=> $this->image_location,
            'MovieTitle'=> $this->movie_name,
            'MovieStudio'=> $this->movie_studio,
            'MovieDesc'=> $this->movie_short_description,
            'genre'=> $this->genres,
            'rating'=> [
                'tomato'=> $this->tomato_meter,
                'imdb' =>  $this->imdb_rating
             ],
            'youtube'=>$this->youtube

        ];
    }
}


