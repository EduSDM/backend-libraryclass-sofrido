<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvaliacaoPeriodica extends Model
{
    use HasFactory;
    
    protected $table = "avaliacoesPeriodicas";
    protected $primaryKey = "id_avaliacoesPeriodicas";

    protected $fillable = ["id_avaliacoesPeriodicas", "isbn_livros", "descricao"];

    public $timestamps = false;
}
