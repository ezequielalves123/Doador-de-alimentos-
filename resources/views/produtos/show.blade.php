<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ver um produto</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <form action="">
    <label for="nome">Nome</label> <br>
    <input type="text" name="nome" id="nome" value="{{ $produtos->nome }}" disabled> <br>
    <label for="custo">TESTE</label> <br>
    <input type="text" name="custo" id="custo" value="{{ $produtos->custo }}" disabled> <br>
    <label for="preco">TESTE</label> <br>
    <input type="text" name="preco" id="preco" value="{{ $produtos->preco }}" disabled> <br>
    <label for="quantidade">Quantidade</label> <br>
    <input type="text" name="quantidade" id="quantidade" value="{{ $produtos->quantidade }}" disabled> <br>
    <a href="{{ route('pagina_inicial') }}">Voltar</a>
  </form>
</body>
</html>