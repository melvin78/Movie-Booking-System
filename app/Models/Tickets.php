<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;

    protected $table='tickets_bought';

    /**
     * Get the user's first name.
     *
     * @return Attribute
     */

    protected function drinks():Attribute
    {

        return Attribute::make(
            get: fn($value,$attributes)=> $attributes['drink_quantity'] . " " .$attributes['drinks']

        );
    }

    protected function snacks():Attribute
    {

        return Attribute::make(
            get: fn($value,$attributes)=> $attributes['snack_quantity'] . " " .$attributes['snacks']

        );
    }

    protected function fastFood():Attribute
    {

        return Attribute::make(
            get: fn($value,$attributes)=> $attributes['fast_food_quantity'] . " " .$attributes['fast_food']

        );
    }
}
