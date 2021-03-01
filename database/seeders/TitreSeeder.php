<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titres')->insert(
            [
                [
                    "titre" => 'titre1',
                    "sousTitre" => 'sousTitre1'
                ],
                [
                    "titre" => 'titre2',
                    "sousTitre" => 'sousTitre2'
                ],
                [
                    "titre" => 'titre3',
                    "sousTitre" => 'sousTitre3'
                ],
                [
                    "titre" => 'titre4',
                    "sousTitre" => 'sousTitre4'
                ],
                [
                    "titre" => 'titre5',
                    "sousTitre" => 'sousTitre5'
                ],
                [
                    "titre" => 'titre6',
                    "sousTitre" => 'sousTitre6'
                ],

            ]
                );

    }
}
