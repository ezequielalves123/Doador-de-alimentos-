<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastrar Produto</title>
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

    form {
      width: 373px;
      height: 632px;
      padding: 20px;
      background-color: #f8ecd4;
      border: 2px solid black;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    form label {
      width: 100%;
      text-align: left;
      margin-bottom: 5px;
    }

    form input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      box-sizing: border-box;
    }

    form button {
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      font-size: 1em;
    }

    form a {
      text-decoration: none;
      color: #007bff;
      margin-top: 10px;
      display: inline-block;
    }

    form a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <form action="{{ route('registrar_produto') }}" method="POST">
    @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">

    <label for="custo">TESTE</label>
    <input type="text" name="custo" id="custo">

    <label for="preco">TESTE</label>
    <input type="text" name="preco" id="preco">

    <label for="quantidade">Quantidade</label>
    <input type="text" name="quantidade" id="quantidade">

    <button type="submit">Salvar</button>
    <a href="{{ route('pagina_inicial') }}">Voltar</a>
  </form>
</body>
</html>
