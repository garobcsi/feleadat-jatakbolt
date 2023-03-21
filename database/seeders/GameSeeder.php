<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("games")->insert([
            ['id'=> 1,'article_id' => 'DB105', 'name' => 'Harry Potter: Roxforti csata társasjáték', 'price' => '19990', 'age_min' => '11', 'age_max' => NULL, 'players_min' => '2', 'players_max' => '4', 'language' => 'magyar', 'publisher_id' => 1],
            ['id'=> 2,'article_id' => 'GDR44', 'name' => 'Uno Flip kártyajáték', 'price' => '2790', 'age_min' => '7', 'age_max' => NULL, 'players_min' => '2', 'players_max' => '10', 'language' => 'magyar', 'publisher_id' => 2],
            ['id'=> 3,'article_id' => 'GWDES', 'name' => 'A Tiltott Sivatag társasjáték', 'price' => '8490', 'age_min' => '10', 'age_max' => NULL, 'players_min' => '2', 'players_max' => '5', 'language' => 'magyar', 'publisher_id' => 3],
            ['id'=> 4,'article_id' => 'HPHOGW', 'name' => 'Harry Potter Hogwarts Battle Monster box angol nyelvű kiegészítő', 'price' => '10490', 'age_min' => '11', 'age_max' => NULL, 'players_min' => '2', 'players_max' => '4', 'language' => 'magyar', 'publisher_id' => 1],
            ['id'=> 5,'article_id' => 'WM00396-ML1-6', 'name' => 'Rick and Morty 1000 db puzzle', 'price' => '5490', 'age_min' => '3', 'age_max' => '100', 'players_min' => '1', 'players_max' => '6', 'language' => 'magyar', 'publisher_id' => 4]
        ]);
    }
}
