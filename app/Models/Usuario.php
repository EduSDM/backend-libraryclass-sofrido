<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ["id_usuarios","nome", "tipo", "cep", "email", "telefone","senha","numero_casa", "observacoes"];
    protected $primaryKey = 'id_usuarios';


    public function publicacoes()
    {
       return $this->belongsTo(Publicacao::class);
    }
    public function reservas(){
        return $this->hasMany(Reserva::class,"id_usuarios");
    }
    public function devolucoes(){
        return $this->hasMany(Devolucao::class);
    }
    public function emprestimos(){
        return $this->hasMany(Emprestimo::class);
    }
    public function resenhas(){
        return $this->hasmany(Resenha::class);
    }
}