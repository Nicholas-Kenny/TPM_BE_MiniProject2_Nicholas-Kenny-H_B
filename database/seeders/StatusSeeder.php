<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert([
            'status_name'=> 'On Hold'
        ]);

        DB::table('statuses')->insert([
            'status_name'=> 'On Going'
        ]);

        DB::table('statuses')->insert([
            'status_name'=> 'Done'
        ]);

        DB::table('statuses')->insert([
            'status_name'=> 'Review'
        ]);

    }
}
