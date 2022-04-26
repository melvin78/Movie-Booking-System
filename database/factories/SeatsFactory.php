<?php

namespace Database\Factories;

use App\Models\seats;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Array_;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\seats>
 */
class SeatsFactory extends Factory
{

    protected $model= seats::class;

    public function definition(): array
    {

        $rows = ['A','B','C','D','E','F','G'];
        $columns = [1,2,3,4,5,6,7,8,9,10,11,12,13,14];
        $seat=[];
        for($i =0 ;$i<count($rows);$i++){
            for($j = 0; $j <count($columns);$j++){
             DB::table('seats')->insert([
                 'seat_number'=>$rows[$i].$columns[$j],
                 'cinema'=> 1
             ]);
            }
        }

      return [


          ''

      ];
    }


}
