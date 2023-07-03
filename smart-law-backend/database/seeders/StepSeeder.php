<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('steps')->insert([
            'id' => 1,
            'title' => 'First consultation',
            'completed' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('steps')->insert([
            'id' => 2,
            'title' => 'Prepare initial interview',
            'completed' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('steps')->insert([
            'id' => 3,
            'title' => 'Initial interview',
            'completed' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('steps')->insert([
            'id' => 4,
            'title' => 'Prepare for First Appearance',
            'completed' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('steps')->insert([
            'id' => 5,
            'title' => 'Prepare for Case Conference',
            'completed' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('steps')->insert([
            'id' => 6,
            'title' => 'After Case Conference',
            'completed' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('steps')->insert([
            'id' => 7,
            'title' => 'Prepare for Settlement Conf.',
            'completed' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('steps')->insert([
            'id' => 8,
            'title' => 'After Settlement Conf.',
            'completed' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('steps')->insert([
            'id' => 9,
            'title' => 'First consultation',
            'completed' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('steps')->insert([
            'id' => 10,
            'title' => 'Closing file',
            'completed' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
