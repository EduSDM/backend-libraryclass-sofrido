<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use App\Models\Resenha;
use Illuminate\Http\Request;

class ResenhasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Resenha $resenha)
    {
        $token = csrf_token();
        $resenhas = Resenha::all();
        echo $token . "\n";
        return $resenhas;
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
        try{
            Resenha::create($request->all());
            return 'Criado com sucesso';
        }catch(\Exception $e){
            return $e;
        }
        
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
    public function update(Request $request, Resenha $resenha)
    {
        $resenha->fill($request->all());
        $resenha->save();
        return "atualizado com sucesso";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Resenha::destroy($id);
        return 'Deletado com sucesso';
    }
    public function resenhasLivro($isbn){
        $resenhas = Resenha::where('isbn_livros', $isbn)
            ->with('usuario') 
            ->get();

        $resenhasComUsuario = $resenhas->map(function ($resenha) {
            return [
                'id_resenhas' => $resenha->id_resenhas,
                'titulo_resenhas' => $resenha->titulo_resenhas,
                'descricao_resenhas' => $resenha->descricao_resenhas,
                'usuario' => [
                    'id_usuarios' => $resenha->usuario->id_usuarios,
                    'nome' => $resenha->usuario->nome,
                ],
                'created_at' => $resenha->created_at,
                'updated_at' => $resenha->updated_at,
            ];
        });

        return response()->json($resenhasComUsuario, 200);
    }
    }
