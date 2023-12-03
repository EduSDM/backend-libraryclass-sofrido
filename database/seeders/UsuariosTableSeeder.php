<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id_usuarios' => 60,
            'nome' => 'rafael',
            'password'=>12345678,
            'tipo' => 0,
            'cep' => '12341234',
            'numero_casa' => 1234,
            'email' => 'rafael1@gmail.com',
            'telefone' => '123123123',
            'observacoes' => 'teste',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create([
            'id_usuarios' => 61,
            'nome' => 'eduardo',
            'password'=>12345678,
            'tipo' => 1,
            'cep' => '12341234',
            'numero_casa' => 1234,
            'email' => 'edu1@gmail.com',
            'telefone' => '123123123',
            'observacoes' => 'teste',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create([
            'id_usuarios' => 62,
            'nome' => 'miguel',
            'password'=>12345678,
            'tipo' => 2,
            'cep' => '12341234',
            'numero_casa' => 1234,
            'email' => 'miguel1@gmail.com',
            'telefone' => '123123123',
            'observacoes' => 'teste',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create([
            'id_usuarios' => 63,
            'nome' => 'leilane',
            'password'=>12345678,
            'tipo' => 3,
            'cep' => '12341234',
            'numero_casa' => 1234,
            'email' => 'leilane1@gmail.com',
            'telefone' => '123123123',
            'observacoes' => 'teste',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create([
            'id_usuarios' => 64,
            'nome' => 'bel',
            'password'=>12345678,
            'tipo' => rand(0, 3),
            'cep' => '12341234',
            'numero_casa' => 1234,
            'email' => 'bel1@gmail.com',
            'telefone' => '123123123',
            'observacoes' => 'teste',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
