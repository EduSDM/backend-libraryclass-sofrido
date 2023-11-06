<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    use HasFactory;
    protected $table="publicacoes";
    protected $primaryKey="id_publicacoes";
    
    protected $fillable=["id_publicacao", "id_mural", "id_usuarios", "mensagem"];
    public function usuarios(){
       return $this->hasMany(User::class);

    }
    public function murais(){
       return $this->hasMany(Mural::class);
    }
}
