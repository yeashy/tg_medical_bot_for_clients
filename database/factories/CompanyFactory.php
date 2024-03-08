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
        $name = $this->faker->company();

        return [
            'name' => $name,
            'code_name' => TextTransformHelper::toSnakeCase($name),
            'bot_token' => $this->faker->creditCardNumber(null, false, ''),
            'company_type_id' => 1
        ];
    }
}
