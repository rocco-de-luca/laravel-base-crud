<?php

use Illuminate\Database\Seeder;
use App\Detail;
use Faker\Generator as Faker;

class TopPlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        $topPlayers = [
            [
                'name' => 'Cristiano Ronaldo',
                'gf' => 21,
                'assist' => 2
            ],
            [
                'name' => 'Edin Dzeko',
                'gf' => 12,
                'assist' => 3
            ],
            [
                'name' => 'Dries Mertens',
                'gf' => 6,
                'assist' => 3
            ],
        ];
        foreach($topPlayers as $topPlayer){
            $newTopPlayer = new Detail();
            $newTopPlayer->fill($topPlayer);
            $newTopPlayer->save();
        }

        /**
         * FAKER
         */

         $records = 10;

         for($i = 0; $i < $records; $i++){
            $newTopPlayer = new Detail();
            $newTopPlayer->name = $faker->name;
            $newTopPlayer->gf = $faker->numberBetween(1,50);
            $newTopPlayer->assist = $faker->numberBetween(5,25);
            $newTopPlayer->save();
         }
         
    }
}
