<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {DB::table('services')->insert([
        [
            'logo'=>'icofont-computer',
            'titre'=> 'titre1',
            'text'=>'text 1',
            'color'=> '#0ea5e0;'

    
        ],
        [
            'logo'=>'icofont-chart-bar-graph',
            'titre'=> 'titre2',
            'text'=>'text 2',
            'color'=>'#07cc70;'
    
        ],
        [
            'logo'=>'icofont-image',
            'titre'=> 'titre 3',
            'text'=>'text 3',
            'color'=>'#e40373;'
    
        ],
        [
            'logo'=>'icofont-settings',
            'titre'=> 'titre 4',
            'text'=>'text 4',
            'color'=>'#f0b103;'
    
        ],
        [
            'logo'=>'icofont-earth',
            'titre'=> 'titre 5',
            'text'=>'text 5',
            'color'=>'#3145fa;'
    
        ],
        [
            'logo'=>'icofont-tasks-alt',
            'titre'=> 'titre 6',
            'text'=>'text 6',
            'color'=>'#a00098;'
    
        ],




    ]);

    }
}
