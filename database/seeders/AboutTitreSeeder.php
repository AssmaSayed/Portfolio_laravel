<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutTitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_titres')->insert([
            [
                'titre' => 'About',
                'sousTitre' => "About sous titre"
            ]
        ]);
    }
}
