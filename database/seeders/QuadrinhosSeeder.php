<?php

namespace Database\Seeders;

use App\Models\Quadrinhos;
use Illuminate\Database\Seeder;

class QuadrinhosSeeder extends Seeder
{
    public function run()
    {
        Quadrinhos::factory()->count(100)->create();
    }
}
