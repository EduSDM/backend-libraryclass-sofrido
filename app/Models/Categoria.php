<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = "categorias";
    protected $primaryKey = "id_categorias";
    protected $fillable = ["id_categorias", "id_secao", "descricao_categoria"];
    public $timestamps = false;
}
