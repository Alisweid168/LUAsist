<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([[
            'class_id' => "3KMMR",
            'course_sec' => "IT3A",
            'instructor_id' => 2,
            'subject_id' => 1,
            'class_active' => true
        ]]);
        DB::table('classes')->insert([[
            'class_id' => "3HRRT",
            'course_sec' => "IT3A",
            'instructor_id' => 4,
            'subject_id' => 2,
            'class_active' => true
        ]]);
    }
}
