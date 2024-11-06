<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Editar Produto</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
    /* Centraliza e estiliza o formulário */
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f8ecd4;
    }

    #update-form {
      width: 373px;
        height: 632px;
      padding: 20px;
      background-color: #f8ecd4;
      border: 1px solid black;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: left;
    }

    #update-form label,
    #update-form input,
    #update-form button,
    #update-form a {
      width: 100%;
      margin-bottom: 10px;
    }

    #update-form button {
      margin-top: 20px;
    }

    #update-form a {
      text-align: center;
      color: #007bff;
      text-decoration: none;
    }

    #update-form a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <form id="update-form" action="{{ route('alterar_produto', ['id' => $produtos->id]) }}" method="POST">
    @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" value="{{ $produtos->nome }}">

    <label for="custo">TESTE</label>
    <input type="text" name="custo" id="custo" value="{{ $produtos->custo }}">

    <label for="preco">TESTE</label>
    <input type="text" name="preco" id="preco" value="{{ $produtos->preco }}">

    <label for="quantidade">Quantidade</label>
    <input type="text" name="quantidade" id="quantidade" value="{{ $produtos->quantidade }}">

    <button type="submit">Salvar</button>
    <a href="{{ route('pagina_inicial') }}">Voltar</a>
  </form>
</body>
</html>
