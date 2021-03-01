<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_infos')->insert([
            [
                'logo'=>'bx bx-receipt',
                'titre'=> 'titre1',
                'text'=>'text 1',
        
            ],
            [
                'logo'=>'bx bx-cube-alt',
                'titre'=> 'titre1',
                'text'=>'text 1',
        
            ],
            [
                'logo'=>'bx bx-images',
                'titre'=> 'titre1',
                'text'=>'text 1',
        
            ],
            [
                'logo'=>'bx bx-shield',
                'titre'=> 'titre1',
                'text'=>'text 1',
        
            ],

        ]);
    }
}
