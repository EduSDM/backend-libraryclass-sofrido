<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secao extends Model
{
    use HasFactory;
    protected $primaryKey = 'íd_secao';
    protected $fillable = ["descricao"];
    protected $table = 'secoes';
}