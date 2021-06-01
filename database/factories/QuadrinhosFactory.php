<?php

namespace Database\Factories;

use App\Models\Quadrinhos;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuadrinhosFactory extends Factory
{
    protected $model = Quadrinhos::class;

    public function definition()
    {
        return [
            'titulo' => $this->faker->text(100),
            'ano' => $this->faker->randomNumber(4),
            'descricao' => $this->faker->text(200)
        ];
    }
}
