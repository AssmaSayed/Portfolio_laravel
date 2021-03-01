<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbars')->insert([
            [
                'li'=>'Home',
                'href'=> '/'
            ],
            [
                'li'=>'About',
                'href'=> '#about'

            ],
            [
                'li'=>'Portfolio',
                'href'=> '#portfolio'

            ],
            [
                'li'=>'contact',
                'href'=> '#contact'

            ],
            [
                'li'=>'BackEnd',
                'href'=> '/backEnd'

            ],

        ]);

    }
}
