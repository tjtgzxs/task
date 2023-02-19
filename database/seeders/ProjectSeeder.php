<?php

namespace Database\Seeders;

use Dotenv\Util\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert(
            [
                'name' =>"project-". \Illuminate\Support\Str::random(10),
                'created_at'=>date("Y-m-d H:i:s",time())
            ]
        );
    }
}
