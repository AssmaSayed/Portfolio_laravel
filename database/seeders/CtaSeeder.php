<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CtaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ctas')->insert([
            [
                'titre'=>'titre header',
                'sousTitre'=>'text header',
                'button'=> 'cta-btn'
            ]
        ]);
    }
}