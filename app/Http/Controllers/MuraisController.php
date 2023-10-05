<?php

namespace App\Http\Controllers;

use App\Models\Mural;
use App\Models\Publicacao;
use Illuminate\Http\Request;

class MuraisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Mural $mural)
    {
        $token = csrf_token();
        $murais = Mural::all();
        echo $token . "\n";
        return $murais;
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
        Mural::create($request->all());
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
    public function update(Request $request, Mural $mural)
    {
        $mural->fill($request->all());
        $mural->save();
        return "atualizado com sucesso";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Mural::destroy($id);
        return "Mural deletado com sucesso";
    }
}
