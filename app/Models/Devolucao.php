<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devolucao extends Model
{
    use HasFactory;
    protected $table = "devolucoes";
    protected $primaryKey = "id_devolucoes";
    protected $fillable = ["id_devolucoes", "data_devolucao", "id_usuarios"];
    public $timestamps = false;
}
