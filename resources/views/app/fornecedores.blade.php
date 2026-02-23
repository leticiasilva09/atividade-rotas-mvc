@extends('layouts.app')

@section('title', 'Fornecedores')

@section('content')
<h1>Dados do Fornecedor</h1>

<p><strong>Nome:</strong> {{ $fornecedor['nome'] }}</p>
<p><strong>Categoria:</strong> {{ $fornecedor['categoria'] }}</p>

<p><strong>Status:</strong>
    @if($fornecedor['status'] == 'ativo')
        Ativo
    @else
        Inativo
    @endif
</p>
@endsection