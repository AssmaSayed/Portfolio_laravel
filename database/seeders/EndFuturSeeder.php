<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EndFuturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('end_futurs')->insert([
            [
                'src'=>'/img/features-1.jpg',
                'titre'=>'titre 1',
                'sousTitre'=>'info 1',
            ],
            [
                'src'=>'/img/features-2.jpg',
                'titre'=>'titre 2',
                'sousTitre'=>'info 2',
            ],
            [
                'src'=>'/img/features-3.jpg',
                'titre'=>'titre 3',
                'sousTitre'=>'info 3',
            ],

        ]);
    }
}
