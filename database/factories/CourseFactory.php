<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model=Course::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_id'=>$this->faker->randomElement(Employee::pluck('employee_id')),
            'name'=>$this->faker->name,
            'place'=>$this->faker->words(2,true),
            'details'=>$this->faker->sentence(20),
            'start_date'=>$this->faker->dateTimeBetween('-10 years','-5 years'),
            'end_date'=>$this->faker->dateTimeBetween('-5 years','-0 years'),
        ];
    }
}
