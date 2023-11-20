<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvaliacaoPeriodica extends Model
{
    use HasFactory;
    
    protected $table = "avaliacoesPeriodicas";
    protected $primaryKey = "id_avaliacoesPeriodicas";
<<<<<<< HEAD
    protected $fillable = ["id_avaliacoesPeriodicas", "isbn_livros", "descricao"];
=======
    protected $fillable = ["id_avaliacoesPeriodicas", "isbn_livros","descricao"];
>>>>>>> 212ddc462914ef2549fc7e0cac89eb756efaf6f5
    public $timestamps = false;
}
