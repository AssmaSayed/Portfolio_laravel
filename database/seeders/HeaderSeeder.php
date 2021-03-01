<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            [
                'titre'=>'titre header',
                'sousTitre'=>'text header',
                'button'=>'btn-get-started scrollto'
            ]
        ]);
    }
}
