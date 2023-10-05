<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ["id_usuarios","nome", "tipo", "cep", "email", "telefone","senha"];
    protected $primaryKey = 'id_usuarios';


    public function publicacoes()
    {
       return $this->belongsTo(Publicacao::class);
    }
}