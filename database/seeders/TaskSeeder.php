<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert(
            [
                'priority'=>99,
                'name' =>"task-". \Illuminate\Support\Str::random(10),
                'created_at'=>date("Y-m-d H:i:s",time()),
                'project_id'=>3
            ]
        );
    }
}
