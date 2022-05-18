<?php

namespace Database\Factories;

use App\Models\AcademicDegree;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class AcademicDegreeFactory extends Factory
{
    protected $model= AcademicDegree::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_id'=>$this->faker->unique()->randomElement(Employee::pluck('employee_id')),
            'educational_qualification'=>$this->faker->sentence(2),
            'college'=>$this->faker->words(2,true),
            'college_major'=>$this->faker->words(3,true),
            'graduation_date'=>$this->faker->dateTimeInInterval('-20 years'),
            'details'=>$this->faker->sentence(20)
        ];
    }
}
