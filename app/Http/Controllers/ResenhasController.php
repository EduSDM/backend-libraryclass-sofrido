<?php

namespace App\Http\Controllers;

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
        Resenha::create($request->all());
        return 'Criado com sucesso';
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
}
