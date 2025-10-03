<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            [
                'role_name' => 'Pilot',
                'description' => 'Learn how to fly planes!',
                'icon' => 'pilot.png',
                'video_url' => 'https://youtube.com/pilot-video',
            ],
            [
                'role_name' => 'Farmer',
                'description' => 'Grow food and take care of animals!',
                'icon' => 'farmer.png',
                'video_url' => 'https://youtube.com/farmer-video',
            ],
        ]);
    }
}
