<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Firebase\JWT\JWT;
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

    public function login(Request $request)
    {
        $dados = $request->only("email", "password");
    
        if (Auth::attempt($dados)) {
            $user = Auth::user();
            $tipoDoUsuario = $user->tipo;
    
            // Defina as informações adicionais que deseja incluir no token
            $informacoesAdicionais = [
                'tipo' => $this->getTipoLabel($tipoDoUsuario),
                'outras_informacoes' => 'valor_qualquer',
            ];
    
            // Defina o tempo de expiração do token (por exemplo, 1 hora a partir de agora)
            $expiracao = now()->addHour()->timestamp;
    
            // Construa o payload do token
            $payload = [
                'iss' => 'LibraryClass', // Emissor do token (pode ser seu domínio)
                'sub' => $user->id, // Assunto do token (por exemplo, ID do usuário)
                'iat' => now()->timestamp, // Timestamp de emissão do token
                'exp' => $expiracao, // Timestamp de expiração do token
                'data' => $informacoesAdicionais, // Informações adicionais
            ];
    
            // Gere o token usando a função encode
            $token = JWT::encode($payload, 'librayclass', 'HS256');
    
            return response()->json(['token' => $token, 'expira_em' => $expiracao]);
        } else {
            return response()->json(['error' => 'Credenciais inválidas'], 401);
        }
    }
    
    private function getTipoLabel($tipoDoUsuario)
    {
        switch ($tipoDoUsuario) {
            case 0:
                return 'usuario_comum';
            case 1:
                return 'professor';
            case 2:
                return 'coordenador';
            case 3:
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