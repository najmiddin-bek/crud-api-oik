<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nick_name' => Str::lower(Str::random(5)),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => rand(0,2) ? now() : null,
            'password' => bcrypt('12345678'),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'remember_token' => Str::random(10)
        ];
    }
}

