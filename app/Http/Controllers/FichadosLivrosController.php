<?php

namespace App\Http\Controllers;

use App\Models\FichadoLivro;
use Illuminate\Http\Request;

class FichadosLivrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FichadoLivro $fichadoLivro)
    {
        $token = csrf_token();
        $fichadosLivros = FichadoLivro::all();
        echo $token . "\n";
        return $fichadosLivros;
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
       FichadoLivro::create($request->all());
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
    public function update(Request $request, FichadoLivro $fichadoLivro)
    {
        $fichadoLivro->fill($request->all());
        $fichadoLivro->save();
        return "Atualizado com sucesso";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       FichadoLivro::destroy($id);
       return "Ficha do livro deletado com sucesso";
    }
}
