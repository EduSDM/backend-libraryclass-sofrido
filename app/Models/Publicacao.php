<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    use HasFactory;
    protected $table="publicacoes";
    protected $primaryKey="id_publicacao";
    
    protected $fillable=["id_publicacao", "imagem_publicacao", "titulo", "conteudo"];
    public function usuarios(){
       return $this->hasMany(User::class);

    }
}
