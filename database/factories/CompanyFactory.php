<?php

namespace Database\Factories;

use App\Helpers\TextTransformHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'code_name' => TextTransformHelper::toSnakeCase($this->faker->company),
            'bot_token' => $this->faker->creditCardNumber(null, false, ''),
            'company_type_id' => 1
        ];
    }
}
