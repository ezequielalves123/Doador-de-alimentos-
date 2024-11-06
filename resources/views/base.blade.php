<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Produtos - CRUD</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

  <header>
    <h1>Produtos</h1>
  </header>

  <nav class="nav-bar">
    <ul>
      <li><a href="/produtos">Início</a></li>
      <li><a href="/produtos/novo">Cadastrar de Produtos</a></li>
    </ul>
  </nav>

  <div>
    @yield('content')
  </div>



</body>
</html>