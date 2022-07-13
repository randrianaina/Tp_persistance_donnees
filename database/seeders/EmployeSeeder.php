<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('employes')->insert([
            'login' => 'sravet',
            'pays' => 'France',
        ]);

        DB::table('employes')->insert([
            'login' => 'arabenjamina',
            'pays' => 'Madagascar',
        ]);

        DB::table('employes')->insert([
            'login' => 'jjoe',
            'pays' => 'Etats-Unis',
        ]);
    }
}
