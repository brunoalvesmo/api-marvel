<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonagensQuadrinhos extends Model
{
    use HasFactory;

    protected $table = "personagems_quadrinhos";
    
    public $incrementing = false;

    protected $primaryKey = [
        'personagem_id',
        'quadrinho_id'
    ];

    protected $fillable = [
        'personagem_id',
        'quadrinho_id'
    ];

    public function personagem()
    {
        return $this->BelongsTo(Personagem::class, "personagem_id", "id");
    }

    public function quadrinho()
    {
        return $this->BelongsTo(Quadrinhos::class, "quadrinho_id", "id");
    }
}
