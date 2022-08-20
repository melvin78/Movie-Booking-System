<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MoviePlotAndRuntimeResource extends JsonResource
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

            'runtime'=> $this->running_time,
            'plot'=> $this->plot,
            'image'=>$this->image_location,
            'moviename'=>$this->movie_name


        ];
    }
}
