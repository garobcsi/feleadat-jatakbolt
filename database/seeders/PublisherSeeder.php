<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("publishers")->insert([
            ['id'=> 1, 'name' => 'The Op', 'webpage' => 'https://theop.games'],
            ['id'=> 2, 'name' => 'Mattel Inc.', 'webpage' => 'https://mattel.com'],
            ['id'=> 3, 'name' => 'Gamewright', 'webpage' => 'https://gamewright.com'],
            ['id'=> 4, 'name' => 'Winning Moves Games', 'webpage' => 'https://www.winning-moves.com'],  
        ]);
    }
}
