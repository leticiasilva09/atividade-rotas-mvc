<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        // criando um array com 4 registros
        $clientes = [ 
            ['nome' => 'Leticia Carvalho', 'email' => 'leticiacarvalhoads@gmail.com'],
            ['nome' => 'Kaique do Vale', 'email' => 'kaique@email.com'],
            ['nome' => 'Samela Farias', 'email' => 'samela@email.com'],
            ['nome' => 'Mário Alex', 'email' => 'marioalex@email.com']
        ];

        return view('app.clientes', compact('clientes'));
    }
}
