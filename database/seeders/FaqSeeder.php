<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            [
               "titre"=>"titre 1",
               "text"=>"text 1",
               "logo"=>"bx bx-help-circle icon-help"
            ],
            [
                "titre"=>"titre 2",
                "text"=>"text 2",
                "logo"=>"bx bx-help-circle icon-help"
            ],
            [
                "titre"=>"titre 3",
                "text"=>"text 3",
                "logo"=>"bx bx-help-circle icon-help"
            ],
            [
                "titre"=>"titre 4",
                "text"=>"text 4",
                "logo"=>"bx bx-help-circle icon-help"
            ],
            [
                "titre"=>"titre 5",
                "text"=>"text 5",
                "logo"=>"bx bx-help-circle icon-help"
            ],
 
    
        ]);
    }
}
