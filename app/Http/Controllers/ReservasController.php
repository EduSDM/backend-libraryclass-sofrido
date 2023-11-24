<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Reserva $reserva)
    {
        $token = csrf_token();
        $reservas = Reserva::all();
        echo $token . "\n";
        return $reservas;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Reserva::create($request->all());
       return "Criado com sucesso.";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reserva $reserva)
    {
       $reserva->fill($request->all());
       $reserva->save();
       return "atualizado com sucesso.";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Reserva::destroy($id);
        return "Deletado com sucesso";
    }
    public function obterDadosReserva()
{
    $dadosReservas = \DB::table('reservas')
        ->join('livros', 'reservas.isbn_livros', '=', 'livros.isbn')
        ->join('users', 'reservas.id_usuarios', '=', 'users.id_usuarios')
        ->join('secoes', 'reservas.id_secao', '=', 'secoes.id_secao')
        ->select(
            'reservas.id_reservas',
            'reservas.data_reservas',
            'reservas.status_reserva',
            'livros.isbn as isbn_livro',
            'livros.nome as nome_livro',
            'users.id_usuarios',
            'users.nome as nome_usuario',
            'secoes.id_secao',
            'secoes.descricao'
        )
        ->get();

    return $dadosReservas;
}
}
