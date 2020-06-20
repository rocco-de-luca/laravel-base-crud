<?php

use Illuminate\Database\Seeder;
use App\Detail;

class TopPlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
    }
}
