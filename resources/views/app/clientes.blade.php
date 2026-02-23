@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
<h1>Lista de Clientes</h1>

@if(count($clientes) > 0)
    <ul>
        @foreach($clientes as $cliente)
            <li>
                <strong>Nome:</strong> {{ $cliente['nome'] }} <br>
                <strong>Email:</strong> {{ $cliente['email'] }}
            </li>
            <hr>
        @endforeach
    </ul>
@else
    <p>Nenhum cliente cadastrado.</p>
@endif

@endsection