<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Deletar Produto</title>
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
      border: 1px solid black;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    form label {
      font-size: 1.2em;
      margin-bottom: 20px;
    }

    form button,
    form a {
      width: 100%;
      margin-bottom: 10px;
      padding: 10px;
      font-size: 1em;
      text-align: center;
    }

    form a {
      text-decoration: none;
      color: #007bff;
      display: inline-block;
    }

    form a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <form action="{{ route('excluir_produto', ['id' => $produtos->id]) }}" method="POST">
    @csrf
    <label for="">Tem certeza que deseja excluir o produto?</label>
    <button type="submit">Sim</button>
    <a href="{{ route('pagina_inicial') }}">Voltar</a>
  </form>
</body>
</html>
