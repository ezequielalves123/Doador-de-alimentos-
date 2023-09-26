<div class="fundo">
  <style>
  .fundo {
    background-color: black;
    color: gold;
    /* Cor dourada para todos os textos dentro de .fundo */
  }

  .fundo a,
  .fundo label,
  .fundo span {
    color: gold;
    /* Cor dourada para links, labels e spans dentro de .fundo */
  }

  .fundo input[type="text"],
  .fundo input[type="password"],
  .fundo input[type="email"] {
    color: black;
    /* Cor dourada para inputs de texto, senha e email dentro de .fundo */
  }
  </style>

  <!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <link rel="icon" href="images/icon.png" type="image/png">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('RH Soluções Contábeis', 'RH Soluções Contábeis') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body class="font-sans text-black-900 antialiased">

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-black-100 black:bg-black-900">
      <div>
        <a href="/">
          <img src="images/logo3.jpg" alt="">
        </a>
      </div>

      <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-black dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
      </div>
    </div>
  </body>

  </html>
</div>