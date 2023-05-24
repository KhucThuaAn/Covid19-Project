<?php

namespace Database\Factories;
use App\Models\Citizen;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Citizen>
 */
class CitizenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create();
        return [
            'firstname' => $faker->firstName,
            'lastname' => $faker->lastName,
            'username' => $faker->userName,
            'email' => $faker->unique()->safeEmail,
            'registration_code' => $faker->unique()->randomLetter(1).$faker->randomNumber(5),
            'login_token' => $faker->unique()->randomLetter(2).$faker->randomNumber(4),
        ];
    }
}
