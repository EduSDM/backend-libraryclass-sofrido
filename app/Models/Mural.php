<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mural extends Model
{
    use HasFactory;

    protected $table="murais";
    protected $primaryKey="id_mural";
    protected $fillable=["id_mural","tipo","descricao"];
    public $timestamps=false; 
    public function publicacoes(){
       return $this->belongsTo(Publicacao::class);
    }
}
