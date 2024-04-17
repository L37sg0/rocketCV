<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Applicant as Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Applicant>
 */
class ApplicantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            Model::FIELD_FIRST_NAME => $this->faker->firstName,
            Model::FIELD_MID_NAME   => $this->faker->lastName,
            Model::FIELD_LAST_NAME  => $this->faker->lastName,
            Model::FIELD_EMAIL  => $this->faker->unique()->email,
            Model::FIELD_PHONE  => $this->faker->phoneNumber,
            Model::FIELD_GENDER => $this->faker->randomElement(['M', 'F']),
            Model::FIELD_BIRTH_DATE => $this->faker->dateTimeBetween('-50 years', '-18 years'),
        ];
    }
}
