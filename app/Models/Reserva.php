<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = "reservas";
    protected $primaryKey = "id_reservas";

    protected $fillable = ["id_reservas","data_reservas", "status_reservas", "fk_ "];

}