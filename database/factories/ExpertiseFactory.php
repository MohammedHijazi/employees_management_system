<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Expertise;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpertiseFactory extends Factory
{
    protected $model=Expertise::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_id'=>$this->faker->randomElement(Employee::pluck('employee_id')),
            'place_of_work'=>$this->faker->words(2,true),
            'job_title'=>$this->faker->jobTitle,
            'salary'=>$this->faker->numberBetween(111111,999999),
            'currency'=>$this->faker->currencyCode,
            'details'=>$this->faker->sentence(20),
            'start_date'=>$this->faker->dateTimeBetween('-10 years','-5 years'),
            'end_date'=>$this->faker->dateTimeBetween('-5 years','-0 years'),
        ];
    }
}
