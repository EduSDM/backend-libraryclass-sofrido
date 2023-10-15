<?php

namespace App\Models;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuario extends Model implements Authenticatable
{
    use HasFactory;
    use Authenticatable;

    protected $table = 'usuarios';
    protected $fillable = ["id_usuarios", "nome", "tipo", "cep", "email", "telefone", "password", "numero_casa", "observacoes"];
    protected $primaryKey = 'id_usuarios';


    public function publicacoes()
    {
        return $this->belongsTo(Publicacao::class);
    }
    public function reservas()
    {
        return $this->hasMany(Reserva::class, "id_usuarios");
    }
    public function devolucoes()
    {
        return $this->hasMany(Devolucao::class);
    }
    public function emprestimos()
    {
        return $this->hasMany(Emprestimo::class);
    }
    public function resenhas()
    {
        return $this->hasmany(Resenha::class);
    }

    public function getAuthIdentifierName(){
        return $this->id_usuarios;
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier(){
        return $this->attributes['id_usuario'];
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword(){
        return $this->attributes['password']
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken();

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string  $value
     * @return void
     */
    public function setRememberToken($value);

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName();
}
}