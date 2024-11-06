<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Listar Contatos</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
  <div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-4">Contatos</h1>
    <ul class="space-y-4">
      @foreach($contatos as $contato)
      <li class="p-4 bg-white rounded shadow">
        <span class="block text-lg font-semibold">{{ $contato->nome }}</span>
        <span class="block text-gray-500">{{ $contato->email }}</span>
        <span class="block text-gray-500">{{ $contato->mensagem }}</span>
        <div class="mt-2">
          <a href="/editar-contato/{{ $contato->id }}" class="text-blue-500 hover:underline">Editar</a>
          <a href="/deletar-contato/{{ $contato->id }}" class="text-red-500 hover:underline ml-4">Deletar</a>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
</body>

</html>