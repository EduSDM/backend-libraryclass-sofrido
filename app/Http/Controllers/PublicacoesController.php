<?php

namespace App\Http\Controllers;

use App\Models\Publicacao;
use Illuminate\Http\Request;

class PublicacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Publicacao $publicacao)
    {
        $token = csrf_token();
        $publicacoes = Publicacao::all();
        echo $token . "\n";
        return $publicacoes;
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
        $publicacao = Publicacao::create([
            'titulo' => $request->isbn_livros,
            'conteudo' => $request->titulo_livros,
            'imagem_publicacao' => $request->file('imagem_publicacao')->store('noticias', 'public'),
        ]);
    
        return response()->json(['message' => 'Noticia criada com sucesso', 'noticia' => $publicacao], 201);
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
    public function update(Request $request, Publicacao $publicacao)
    {
        $publicacao->fill($request->all());
        $publicacao->save();
        return "atualizado com sucesso";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Publicacao::destroy($id);
        return 'Deletado com sucesso';
    }
}