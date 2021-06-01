<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PersonagemSeeder::class,
            QuadrinhosSeeder::class,
        ]);
        for($i = 1; $i <= 100; $i++) {
        DB::table('personagems_quadrinhos')
            ->insert(['personagem_id' => $i, 'quadrinho_id' => $i]);
        }
    }
}
