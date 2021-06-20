<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UbicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ubicacions')->insert([
            'nombre' => 'Remoto',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);        
        DB::table('ubicacions')->insert([
            'nombre' => 'Caracas - VE',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Buenos Aires - Argentina',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Bogota - Colombia',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Santiago - Chile',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Lima - Peru',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        

    }
}
