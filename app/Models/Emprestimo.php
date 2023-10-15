<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    use HasFactory;

    protected $table = "emprestimos";
    protected $primaryKey = "id_emprestimos";
    protected $fillable = ["id_emprestimos", "data_emprestimos", "id_usuarios"];
    public $timestamps = false;
}
