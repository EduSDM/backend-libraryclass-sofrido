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
        $publicacoes = Publicacao::all();
        return $publicacoes;
    }
    public function ultimasPublicacoes()
{
    $publicacoes = Publicacao::orderBy('created_at', 'desc')->take(5)->get();
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
            'titulo' => $request->titulo,
            'conteudo' => $request->conteudo,
            'imagem_publicacao' => $request->file('imagem_publicacao')->store('noticias', 'public'),
        ]);
    
        return response()->json(['message' => 'Noticia criada com sucesso', 'noticia' => $publicacao], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $noticia = Publicacao::find($id);

    if ($noticia) {
        return response()->json($noticia);
    } else {
        return response()->json(['message' => 'Notícia não encontrada'], 404);
    }
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