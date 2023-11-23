<?php

namespace App\Http\Controllers;

use App\Models\AvaliacaoPeriodica;
use Illuminate\Http\Request;

class AvaliacoesPeriodicasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( AvaliacaoPeriodica $avaliacaoPeriodica)
    {
        $avaliacoesPeriodicas = AvaliacaoPeriodica::all();
        return $avaliacoesPeriodicas;
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
      AvaliacaoPeriodica::create($request->all());
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
    public function update(Request $request, AvaliacaoPeriodica $avaliacaoPeriodica)
    {
        $avaliacaoPeriodica->fill($request->all());
        $avaliacaoPeriodica->save();
        return "atualizado com sucesso";
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        AvaliacaoPeriodica::destroy($id);
        return "deletado com sucesso.";
    }
}
