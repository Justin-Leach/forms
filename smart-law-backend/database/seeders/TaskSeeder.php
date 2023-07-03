<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            'id' => 1,
            'title' => 'Conflit of interest check',
            'checked' => false,
            'urgent' => false,
            'notes' => '',
            'step_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tasks')->insert([
            'id' => 2,
            'title' => 'Check for urgency of risks',
            'checked' => false,
            'urgent' => false,
            'notes' => '',
            'step_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tasks')->insert([
            'id' => 3,
            'title' => 'The spouse is or will try to deplete spouse\'s property',
            'checked' => false,
            'urgent' => false,
            'notes' => '',
            'step_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tasks')->insert([
            'id' => 4,
            'title' => 'Family Violence',
            'checked' => false,
            'urgent' => false,
            'notes' => '',
            'step_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tasks')->insert([
            'id' => 5,
            'title' => 'Does a child need protection',
            'checked' => false,
            'urgent' => false,
            'notes' => '',
            'step_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tasks')->insert([
            'id' => 6,
            'title' => 'Any imminent deadlines',
            'checked' => false,
            'urgent' => false,
            'notes' => '',
            'step_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tasks')->insert([
            'id' => 7,
            'title' => 'Inform client about financial diclosure',
            'checked' => false,
            'urgent' => false,
            'notes' => '',
            'step_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tasks')->insert([
            'id' => 8,
            'title' => 'Discuss the possibility of reconciliation (If separation or divorce)',
            'checked' => false,
            'urgent' => false,
            'notes' => '',
            'step_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tasks')->insert([
            'id' => 9,
            'title' => 'Explain the need to make decisions as to decision-making, guardianship, and contact with children that are in the best interests of the children',
            'checked' => false,
            'urgent' => false,
            'notes' => '',
            'step_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tasks')->insert([
            'id' => 10,
            'title' => 'Refer to a professionnal  depending on client\'s state of mind',
            'checked' => false,
            'urgent' => false,
            'notes' => '',
            'step_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tasks')->insert([
            'id' => 11,
            'title' => 'Explain the court costs',
            'checked' => false,
            'urgent' => false,
            'notes' => '',
            'step_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
