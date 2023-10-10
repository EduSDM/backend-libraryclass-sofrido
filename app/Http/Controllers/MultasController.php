<?php

namespace App\Http\Controllers;

use App\Models\Multa;
use Illuminate\Http\Request;

class MultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Multa $multa)
    {
        $token = csrf_token();
        $multas = Multa::all();
        echo $token . "\n";
        return $multas;
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
        Multa::create($request->all());
        return 'criado com sucesso';
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
    public function update(Request $request, Multa $multa)
    {
        $multa->fill($request->all());
        $multa->save();
        return "atualizado com sucesso";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Multa::destroy($id);
        return 'deletado com sucesso';
    }
}
