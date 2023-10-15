<?php

namespace App\Http\Controllers;

use App\Models\Publicacao;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldBeUniqueUntilProcessing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $token = csrf_token();
        $usuarios = User::all();
        echo $token . "\n";
        return $usuarios;
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
        $dados=$request->except("password");
        $senha=$request->input("password");
        $senhacripto=Hash::make($senha);
        $dados["password"]=$senhacripto;
       
        User::create($dados);
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
    public function update(Request $request, User $usuario)
    {
        $usuario->fill($request->all());
        $usuario->save();
        return "atualizado com sucesso";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        User::destroy($id);
        return 'usuario deletado com sucesso';
    }

    public function login(Request $request)
    {
        $dados = $request->only("email","password");//pega tudo enviado pela requisicao 
        
       
       if (Auth::attempt($dados)) {
       
        return "usuario logado com susseco";
       }
       else{
        return "usuario ou senha incoretos";
       }
       
    }

    public function telaLogin(){
        return "essa e a tela de login";
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/");
    }
}