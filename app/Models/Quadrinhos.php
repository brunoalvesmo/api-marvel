<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quadrinhos extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'titulo',
        'ano',
        'descricao'
    ];

    public function personagens()
    {
        return $this->belongsToMany(\App\Models\Personagem::class,
            'personagems_quadrinhos', 
            'quadrinho_id', 
            'personagem_id'
        );
    }
}
