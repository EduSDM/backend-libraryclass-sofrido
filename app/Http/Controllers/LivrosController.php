<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Livro $livro)
    {
        $livros = Livro::all();
        return response()->json($livros);
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
    
        $livro = Livro::create([
            'isbn_livros' => $request->isbn_livros,
            'titulo_livros' => $request->titulo_livros,
            'foto_livros' => $request->file('foto_livros')->store('livros', 'public'),
            'sinopse_livros' => $request->sinopse_livros,
            'id_secao' => $request->id_secao,
        ]);
    
        return response()->json(['message' => 'Livro criado com sucesso', 'livro' => $livro], 201);
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
    public function update(Request $request, Livro $livro)
    {
        $livro->fill($request->all());
        $livro->save();
        return response()->json('atualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Livro::destroy($id);
        return 'deletado com sucesso';
    }
    public function maisemprestados(){
        $livrosPriorizados = Livro::leftJoin('emprestimos', 'livros.isbn_livros', '=', 'emprestimos.isbn_livros')
    ->select('livros.*', \DB::raw('COUNT(emprestimos.id_emprestimos) as total_emprestimos'))
    ->groupBy('livros.isbn_livros')
    ->orderByDesc('total_emprestimos')
    ->get();
        return $livrosPriorizados;
    }
}
