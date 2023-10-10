<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Secao extends Model
{
    use HasFactory;

    protected $fillable = ["id_secoes", "descricao_secoes"];
    protected $primaryKey = "id_secoes";

    protected $table="secoes";

    public function Livros(){
        return $this->hasMany(Livro::class);

    }
    public function Categorias(){
         return $this->hasMany(Categoria::class);

    }
}
