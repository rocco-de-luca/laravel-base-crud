<?php

use App\Goalkeeper;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class GoalkeepersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Goalkeeper::truncate();

        $records = 3;

        for($i = 0; $i < $records; $i++){
           $newGoalkeeper = new Goalkeeper();
           $newGoalkeeper->name = $faker->name;
           $newGoalkeeper->gs = $faker->numberBetween(1,100);
           $newGoalkeeper->penaltyshots = $faker->numberBetween(1,100);
           $newGoalkeeper->save();
        }
    }
}

