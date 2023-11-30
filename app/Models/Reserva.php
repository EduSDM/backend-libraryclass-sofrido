<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = "reservas";
    protected $primaryKey = "id_reservas";

    protected $fillable = ["id_reservas","data_reservas", "isbn_livros", "id_usuarios","status_reserva"];


    public function usuario(){
        return $this->belongsTo(User::class, 'id_usuarios');
    }

}