<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clinical>
 */
class ClinicalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        // return [
        //     'name' => $this->faker->name(),
        //     'age' => 29,
        //     // 'user_name' => $this->faker->unique()->userName(), 
        //     'sex' => $this->faker->randomElement(['男', '女','その他']), 
        //     'tel_num' => $this->faker->phoneNumber(),
        //     'email' => $this->faker->email(), 
        //     'postal_num' => $this->faker->regexify('[1-9]'), 
        //     'address' => $this->faker->address(), 
        //     'parking_lot' => $this->faker->randomElement(['有', '無']), 
        //     'needs' => $this->faker->realText(50), 
        //     'medical_history_f' => $this->faker->realText(10), 
        //     'medical_history_s' => $this->faker->realText(10), 
        //     'medical_history_t' => $this->faker->realText(10), 
        //     'rom' => $this->faker->realText(10), 
        //     'work' => $this->faker->realText(10), 
        //     'adl_basic' => $this->faker->randomElement(['有', '無']), 
        //     'adl_eating' => $this->faker->randomElement(['有', '無']), 
        //     'adl_grooming' => $this->faker->randomElement(['有', '無']), 
        //     'adl_toilet' => $this->faker->randomElement(['有', '無']), 
        //     'adl_clothes' => $this->faker->randomElement(['有', '無']), 
        //     'adl_bathing' => $this->faker->randomElement(['有', '無']), 
        //     'others' => $this->faker->realText(50), 
        //     'user_id' => 1, 
        // ];
        
    }
}
