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
        $columns = [15,16,17,18,19,20,21];
        for($i =0 ;$i<count($rows);$i++){
            for($j = 0; $j <count($columns);$j++){
                DB::table('seats')->insert([
                    'seat_number'=>$rows[$i].$columns[$j],
                    'cinema_id'=> 4,
                    'isBooked'=>false
                ]);
            }
        }
    }
}
