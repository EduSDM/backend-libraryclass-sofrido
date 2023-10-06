<?php

namespace App\Http\Controllers;

use App\Models\Devolucao;
use App\Models\FichadoLivro;
use Illuminate\Http\Request;

class DevolucoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Devolucao $devolucao)
    {
    $token = csrf_token();
    $devolucoes = $devolucao::all();
    echo $token . "\n";
    return $devolucoes; 
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
      Devolucao::create($request->all());
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
    public function update(Request $request, Devolucao $devolucao)
    {
       $devolucao->fill($request->all());
       $devolucao->save();
       return "Atualizado com sucesso.";
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Devolucao::destroy($id);
        return "Deletado com sucesso."; 
    }
}
