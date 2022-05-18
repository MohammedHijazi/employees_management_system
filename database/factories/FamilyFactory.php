<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Family;
use Illuminate\Database\Eloquent\Factories\Factory;

class FamilyFactory extends Factory
{
    protected $model=Family::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_id'=>$this->faker->randomElement(Employee::pluck('employee_id')),
            'full_name'=>$this->faker->name,
            'id_number'=>$this->faker->unique()->numberBetween([000000000,999999999]),
            'relation'=>$this->faker->word,
            'birth_date'=>$this->faker->dateTimeBetween('-40 years'),
            'social_status'=>$this->faker->randomElement(['single','married']),
            'study'=>$this->faker->randomElement(['yes','no']),
            'works'=>$this->faker->randomElement(['yes','no']),
            'id_image_path'=>$this->faker->imageUrl

        ];
    }
}
