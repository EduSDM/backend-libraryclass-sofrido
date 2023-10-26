<?php

namespace App\Http\Controllers;

use App\Models\Secao;
use Illuminate\Http\Request;

class  SecoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $token = csrf_token();
        $reservas = Secao::all();
        echo $token . "\n";
        return $reservas;
       // return Secao::all();
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
        Secao::create($request->all());
        return 'secao criada com sucesso';
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
    public function update(Request $request,string $id)
    {
        $descricao=$request->input('descricao');
        Secao::where('íd_secao',$id)->update(['descricao' => $descricao]);
        return  'átualizado com sucesso';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Secao::destroy($id);
        return 'secao apagada com sucesso';
    }
}
