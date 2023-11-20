<?php

namespace App\Http\Controllers;

use App\Models\Publicacao;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldBeUniqueUntilProcessing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
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
        $dados = $request->except("password");
        $senha = $request->input("password");
        $senhacripto = Hash::make($senha);
        $dados["password"] = $senhacripto;

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
    public function update(Request $request, User $user)
    {
        $user->fill($request->all());
        $user->save();
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

    use Illuminate\Support\Facades\Auth;

    use Illuminate\Support\Facades\Auth;

public function login(Request $request)
{
    $dados = $request->only("email", "password");

    if (Auth::attempt($dados)) {
        $user = Auth::user();
        $tipoDoUsuario = $user->tipo;

        $token = $user->createToken('NomeDoToken')->accessToken;

        return response()->json(['token' => $token, 'tipo' => $this->getTipoLabel($tipoDoUsuario)]);
    } else {
        return response()->json(['error' => 'Credenciais inválidas'], 401);
    }
}

private function getTipoLabel($tipoDoUsuario)
{
    switch ($tipoDoUsuario) {
        case 1:
            return 'usuario_comum';
        case 2:
            return 'professor';
        case 3:
            return 'coordenador';
        case 4:
            return 'diretor';
        default:
            return 'desconhecido';
    }
}

    
    public function telaLogin()
    {
        return "essa e a tela de login";
    }

    public function checking(Request $request){
        return response()->json(Auth::check());
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/");
    }
}