<?php

namespace Database\Seeders;

use App\Models\AboutInfo;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
           TitreSeeder::class,
           AboutInfoSeeder::class,
           AboutTitreSeeder::class,
           HeaderSeeder::class,
           NavbarSeeder::class, 
           EndFuturSeeder::class,
           CtaSeeder::class,
           ServiceSeeder::class,
           PortfolioSeeder::class,
           FaqSeeder::class,
        //    ContactSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
