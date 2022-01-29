<?php

use Illuminate\Database\Seeder;
use App\Player;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $players = config('players');

        foreach ($players as $player) {
            $new_player = new Player();
            $new_player->name = $player['name'];
            $new_player->last = $player['last'];
            $new_player->birth = $player['birth'];
            $new_player->height = $player['height'];
            $new_player->team = $player['team'];
            $new_player->team_logo = $player['team_logo'];
            $new_player->photo = $player['photo'];
            $new_player->average_point = $player['average_point'];
            $new_player->save();
        }
    }
}
