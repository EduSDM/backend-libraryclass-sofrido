<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichadoLivro extends Model
{
    use HasFactory;

    protected $table = "fichadosLivros";
    protected $primaryKey = "id_ficha";
    protected $fillable = ["id_ficha", "nomedoUsuario"];
    protected $timestamps = false;

    public function usuarios()
    {
        return $this->belongsTo(Usuario::class);

    }
}