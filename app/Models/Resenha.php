<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resenha extends Model
{
    use HasFactory;
    protected $table = "resenhas";
    protected $primaryKey = "id_resenhas";
    protected $fillable = ["id_resenhas", "titulo_resenhas", "id_usuarios", "isbn_livros", "descricao_resenhas"];
}