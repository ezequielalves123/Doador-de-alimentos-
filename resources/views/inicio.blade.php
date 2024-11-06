<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Início</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<style>
a,
li {
  color: gold;
}
</style>

<body>
  <header class="bg-black text-gold py-2 flex justify-between items-center">
    <div class="logo flex items-center">
      <img src="{{ asset('images/logo3.jpg') }}" alt="Logo" class="h-10 mr-2">
    </div>
    <nav style="margin-right: 20px;">
      <ul class="flex list-none m-0 p-0 gap-5">
        <li class="text-lg"><a href="/home1" class="text-gold hover:text-gray-300">Home</a></li>
        <li class="text-lg"><a href="/sobre-nos" class="text-gold hover:text-gray-300">Sobre Nós</a></li>
        <li class="text-lg"><a href="/servicos" class="text-gold hover:text-gray-300">Serviços</a></li>
        <li class="text-lg"><a href="/equipe" class="text-gold hover:text-gray-300">Equipe</a></li>
        <li class="text-lg">
          <a href="/cadastrar" class="text-gold hover:text-gray-300">Contato</a>
        </li>
      </ul>
    </nav>
  </header>
</body>

</html>