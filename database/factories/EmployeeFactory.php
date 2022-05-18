<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Expertise;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    protected $model= Employee::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {
        return [
            'employee_id'=>$this->faker->unique()->numberBetween([000000000,999999999]),
            'first_name'=>$this->faker->firstName,
            'second_name'=>$this->faker->firstName,
            'third_name'=>$this->faker->firstName,
            'last_name'=>$this->faker->lastName,
            'specialization'=>$this->faker->jobTitle,
            'social_status'=>$this->faker->randomElement(['single','married']),
            'gender'=>$this->faker->randomElement(['male','female']),
            'mobile_number'=>$this->faker->phoneNumber,
            'phone_number'=>$this->faker->phoneNumber,
            'email'=>$this->faker->email,
            'hiring_date'=>$this->faker->dateTimeBetween('-20 years'),
            'birth_date'=>$this->faker->dateTimeBetween('-40 years'),
            'address'=>$this->faker->address,
            'image_path'=>$this->faker->imageUrl(500,500),
        ];
    }
}
