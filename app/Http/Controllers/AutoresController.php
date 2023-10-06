<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Autor $autores)
    {
        $token = csrf_token();
        $autores = $autores::all();
        echo $token . "\n";
        return $autores; 
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
      Autor::create($request->all());
      return "criado com sucesso";
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
    public function update(Request $request, Autor $autor)
    {
      
        $autor->fill($request->all());
        $autor->save();
        return "atualizado com sucesso";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Autor::destroy($id);
        return "deletado com sucesso.";
    }
}
