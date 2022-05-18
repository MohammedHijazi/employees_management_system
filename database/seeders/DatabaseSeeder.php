<?php

namespace Database\Seeders;

use App\Models\AcademicDegree;
use App\Models\Course;
use App\Models\Employee;
use App\Models\Expertise;
use App\Models\Family;
use App\Models\User;
use Database\Factories\CourseFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Expertise::factory(15)->create();
        Employee::factory(10)->create();
        AcademicDegree::factory(10)->create();
        Course::factory(15)->create();
        Family::factory(30)->create();
        //User::factory(10)->create();
    }
}
