<?php

namespace Database\Seeders;

use App\Models\Lane;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaneSeeDer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lanes')->insert([
            [
                'name' => 'tuto',
            'created_at' =>now(),
            'updated_at' =>now(),
            ],[
                'name' => 'null',
            'created_at' =>now(),
            'updated_at' =>now(),
            ],[
                'name' => 'done',
            'created_at' =>now(),
            'updated_at' =>now(),
            ]
            ]);
    }
}
