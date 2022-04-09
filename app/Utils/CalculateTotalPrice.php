<?php

namespace App\Utils;

class CalculateTotalPrice
{

    public static function TotalPrice(
        $ticket_price,
        $drinks_price,
        $snacks_price,
        $fast_food_price,
        $drinks_quantity,
        $snacks_quantity,
        $fast_food_quanity

    ): float|int
    {

        return $ticket_price + ($drinks_price * $drinks_quantity) + ($snacks_price * $snacks_quantity) +
            ($fast_food_price * $fast_food_quanity);

    }
}
