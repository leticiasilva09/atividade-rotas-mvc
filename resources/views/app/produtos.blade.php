@extends('layouts.app')

@section('title', 'Produtos')

@section('content')
<h1>Produto</h1>

@if($nome && $preco)
    <p><strong>Nome:</strong> {{ $nome }}</p>
    <p><strong>Preço:</strong> R$ {{ number_format($preco, 2, ',', '.') }}</p>
@else
    <p>Nenhum produto informado.</p>
@endif

@endsection