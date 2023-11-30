<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    protected $table = "livros";
    protected $primaryKey = "isbn_livros";
    protected $fillable = ["isbn_livros", "titulo_livros", "foto_livros", "sinopse_livros", "id_secao","id"];
    public $timestamps = false;

    public function autor()
{
    return $this->belongsTo(Autor::class,'id');
}
}