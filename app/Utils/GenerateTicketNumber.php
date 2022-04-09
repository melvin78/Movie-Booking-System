<?php

namespace App\Utils;

use phpDocumentor\Reflection\Types\Integer;

class GenerateTicketNumber
{

    public static function GenerateTicketNumber($cinema_short_code,$movie_short_code){

        $random_number =  sprintf("%06d", mt_rand(1, 999999));

        return $cinema_short_code.'-'.$random_number.'-'.$movie_short_code;

    }

}
