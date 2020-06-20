<?php

use Illuminate\Database\Seeder;
use App\Player;
use Faker\Generator as Faker;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        Player::truncate();

        $records = 11;

        for($i = 0; $i < $records; $i++){
           $newPlayer = new Player();
           $newPlayer->name = $faker->name;
           $newPlayer->club = $faker->name;
           $newPlayer->save();
        }
    }
}
