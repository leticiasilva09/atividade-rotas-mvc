<nav>
    <a href="{{ route('principal') }}">Home</a>
    <a href="{{ route('sobrenos') }}">Sobre</a>
    <a href="{{ route('contato') }}">Contato</a>
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('app.clientes') }}">Clientes</a>
    <a href="{{ route('app.fornecedores', ['nome'=>'Joao','status'=>'ativo','categoria'=>'nacional']) }}">Fornecedores</a>
    <a href="{{ route('app.produtos') }}">Produtos</a>
</nav>