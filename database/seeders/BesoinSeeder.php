<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BesoinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('besoins')->insert([
            'employe_id' => 1,
            'materiel_a_remplacer' => 'Ordinateur fixe',
            'materiel_souhaite' => 'Ordinateur portable',
            'date_souhaite' => '2020-07-12',
            'commentaire' => 'Je souhaite un ordinateur portable',
        ]);

        DB::table('besoins')->insert([
            'employe_id' => 2,
            'materiel_a_remplacer' => 'Voiture',
            'materiel_souhaite' => 'Vélo',
            'date_souhaite' => '2020-07-12',
            'commentaire' => 'Je souhaite un vélo',
        ]);

        DB::table('besoins')->insert([
            'employe_id' => 3,
            'materiel_a_remplacer' => 'Iphone',
            'materiel_souhaite' => 'Samsung',
            'date_souhaite' => '2020-07-12',
            'commentaire' => 'Je souhaite un Samsung',
        ]);
    }
}
