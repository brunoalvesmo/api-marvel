<?php

namespace Database\Factories;

use App\Models\Personagem;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonagemFactory extends Factory
{
    protected $model = Personagem::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->text(100),
            'poder' => $this->faker->text(100),
            'descricao' => $this->faker->text(100) 
        ];
    }
}
