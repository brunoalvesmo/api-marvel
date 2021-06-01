<?php

namespace Database\Seeders;

use App\Models\Personagem;
use Illuminate\Database\Seeder;

class PersonagemSeeder extends Seeder
{
    public function run()
    {
        Personagem::factory()->count(100)->create();
    }
}
