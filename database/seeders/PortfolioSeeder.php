<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            [
                'src'=>'img/portfolio/portfolio-1.jpg',
                'titre'=> 'titre 1',
                'text'=>'text 1',
    
            ],
            [
                'src'=>'img/portfolio/portfolio-2.jpg',
                'titre'=> 'titre 2',
                'text'=>'text 2',
    
            ],
            [
                'src'=>'img/portfolio/portfolio-3.jpg',
                'titre'=> 'titre 3',
                'text'=>'text 3',
    
            ],
            [
                'src'=>'img/portfolio/portfolio-4.jpg',
                'titre'=> 'titre 4',
                'text'=>'text 4',
    
            ],
            [
                'src'=>'img/portfolio/portfolio-5.jpg',
                'titre'=> 'titre 5',
                'text'=>'text 5',
    
            ],
            [
                'src'=>'img/portfolio/portfolio-6.jpg',
                'titre'=> 'titre 6',
                'text'=>'text 6',
    
            ],
            [
                'src'=>'img/portfolio/portfolio-7.jpg',
                'titre'=> 'titre 7',
                'text'=>'text 7',
    
            ],
            [
                'src'=>'img/portfolio/portfolio-8.jpg',
                'titre'=> 'titre 8',
                'text'=>'text 8',
    
            ],
            [
                'src'=>'img/portfolio/portfolio-9.jpg',
                'titre'=> 'titre 9',
                'text'=>'text 9',
    
            ],

        ]);
    }
}
