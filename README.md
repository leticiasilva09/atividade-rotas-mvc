# Atividade - Rotas e Blade (Laravel)

Aluna: Leticia Carvalho da Silva  
Curso: Análise e Desenvolvimento de Sistemas  
Disciplina: Programação Web I  
IFCE - Campus Boa Viagem  

---

## Objetivo

Aplicar os conceitos de:

- Rotas nomeadas
- Agrupamento de rotas com prefixo
- Controllers
- Parâmetros via URL
- Blade Template Engine
- Reutilização de layout com @extends e @include
- Estrutura MVC

---

## Como executar o projeto

1. Clonar o repositório:

```bash
git clone https://github.com/leticiasilva09/atividade-rotas-mvc.git
```

2. Entrar na pasta do projeto (caso não esteja):

```bash
cd atividade-rotas-mvc
```

3. Instalar dependências:

```bash
composer install
```

4. Criar arquivo `.env`:

```bash
cp .env.example .env
```

5. Gerar chave da aplicação:

```bash
php artisan key:generate
```

6. Rodar o servidor:

```bash
php artisan serve
```

7. Acessar no navegador:

```
http://localhost:8000
```

---

## Rotas Principais

- /
- /sobrenos
- /contato
- /login

## Grupo de Rotas (/app)

- /app/clientes
- /app/fornecedores/{nome}/{status}/{categoria}
- /app/produtos/{nome?}/{preco?}
