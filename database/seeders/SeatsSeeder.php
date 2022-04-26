<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = ['A','B','C','D','E','F','G'];
        $columns = [1,2,3,4,5,6,7,8,9,10,11,12,13,14];
        for($i =0 ;$i<count($rows);$i++){
            for($j = 0; $j <count($columns);$j++){
                DB::table('seats')->insert([
                    'seat_number'=>$rows[$i].$columns[$j],
                    'cinema_id'=> 4
                ]);
            }
        }
    }
}
