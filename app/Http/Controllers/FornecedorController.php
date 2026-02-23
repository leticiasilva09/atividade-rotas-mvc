<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index($nome, $status, $categoria)
    {
        // criando array com os dados
        $fornecedor = [
            'nome' => $nome,
            'status' => $status,
            'categoria' => $categoria
        ];

        // enviando para a view
        return view('app.fornecedores', compact('fornecedor'));
    }
}
