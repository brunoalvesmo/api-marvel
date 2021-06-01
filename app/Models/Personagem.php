<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Personagem extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nome',
        'poder',
        'descricao'        
    ];

    public function quadrinhos()
    {
        return $this->belongsToMany(\App\Models\Quadrinhos::class,
            'personagems_quadrinhos', 
            'personagem_id',
            'quadrinho_id'
        );
    }
}
