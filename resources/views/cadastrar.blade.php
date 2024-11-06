<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Produto</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 py-8">
  <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
    <form action="/cadastrar-contato" method="POST" class="p-8">
      @csrf
      <div class="mb-4">
        <label for="nome" class="block text-gray-700 text-sm font-bold mb-2">Nome do Produto:</label>
        <input type="text" id="nome" placeholder="Digite o nome do produto..."
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          name="nome">
      </div>
      <div class="mb-4">
        <label for="descricao" class="block text-gray-700 text-sm font-bold mb-2">Descrição:</label>
        <textarea id="descricao" placeholder="Digite a descrição do produto..."
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          name="descricao"></textarea>
      </div>
      <div class="mb-4">
        <label for="preco" class="block text-gray-700 text-sm font-bold mb-2">Preço:</label>
        <input type="number" id="preco" placeholder="Digite o preço do produto..." step="0.01"
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          name="preco">
      </div>
      <div class="mb-4">
        <label for="quantidade" class="block text-gray-700 text-sm font-bold mb-2">Quantidade em Estoque:</label>
        <input type="number" id="quantidade" placeholder="Digite a quantidade em estoque..."
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          name="quantidade">
      </div>
      <div class="flex items-center justify-between">
        <button
          class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
          type="submit">
          Cadastrar Produto
        </button>
      </div>
    </form>
  </div>

</body>

</html>
