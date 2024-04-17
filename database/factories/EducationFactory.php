<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Education as Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
//            Model::FIELD_APPLICANT_ID   => ,
//            Model::FIELD_UNV_ID => ,
            Model::FIELD_DATE_FROM  => $this->faker->dateTimeBetween('-18 years', '-2 years'),
            Model::FIELD_DATE_TO    => $this->faker->dateTimeBetween('-2 years', '+2 years'),
            Model::FIELD_DEGREE => rand(1,4),
            Model::FIELD_SPECIALTY  => $this->faker->sentence(3),
            Model::FIELD_ACCREDITATION_ASSESSMENT   => rand(3,6),
        ];
    }
}
