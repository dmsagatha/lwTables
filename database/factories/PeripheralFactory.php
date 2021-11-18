<?php

namespace Database\Factories;

use App\Models\Peripheral;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeripheralFactory extends Factory
{
  protected $model = Peripheral::class;
  
  public function definition(): array
  {
    $users = User::pluck('id')->all();

    return [
      'per_type'    => 'screen',
      'inventory'   => $this->faker->unique()->numberBetween($min = 10000000, $max = 90000000),
      'usersabs_id' => $this->faker->randomElement($users),
    ];
  }
}