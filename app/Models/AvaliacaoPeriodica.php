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

=======
>>>>>>> 9e3fa90bebd251e9709842251f2fa552a14f890e
    protected $fillable = ["id_avaliacoesPeriodicas", "isbn_livros", "descricao"];

    public $timestamps = false;
}
