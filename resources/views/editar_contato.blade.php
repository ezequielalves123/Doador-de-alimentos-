<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Contato</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
  <div class="container mx-auto mt-10 p-6 max-w-md">
    <h1 class="text-2xl font-bold mb-5">Editar Contato</h1>
    <form action="/atualizar-contato/{{ $contato->id }}" method="POST" class="bg-white p-6 rounded shadow-md">
      @csrf
      <div class="mb-4">
        <label for="nome" class="block text-gray-700 text-sm font-bold mb-2">Nome:</label>
        <input type="text" name="nome" value="{{ $contato->nome }}" id="nome"
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      <div class="mb-4">
        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
        <input type="email" name="email" value="{{ $contato->email }}" id="email"
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      <div class="mb-6">
        <label for="mensagem" class="block text-gray-700 text-sm font-bold mb-2">Mensagem:</label>
        <textarea name="mensagem" id="mensagem"
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $contato->mensagem }}</textarea>
      </div>
      <div class="flex items-center justify-between">
        <button type="submit"
          class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
          Atualizar
        </button>
      </div>
    </form>
  </div>
</body>

</html>
