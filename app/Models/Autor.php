<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $fillable = ["id_autores", "nome_autores", "nacionalidade_autores"];
    protected $primaryKey = 'id_autores';

  
}