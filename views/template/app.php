<?php

require './bd.php'

?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Book Wise</title>
</head>

<body class="bg-stone-950 text-stone-200">
  <header class="bg-stone-900">
    <nav class=" mx-auto max-w-screen-lg flex justify-between px-8 py-4">
      <div class="font-bold text-xl tracking-wide">
        Book Wise
      </div>
      <ul class="flex space-x-4 jont-bold">
        <li><a class="text-blue-600" href="/">Explorar</a></li>
        <li><a class="hover:underline" href="/meus-livros.">Meus livros</a></li>
      </ul>
      <ul>
        <li>
          <a class="hover:underline" href="/login.php">Fazer login</a>
        </li>
      </ul>
    </nav>
  </header>

  <main class="mx-auto max-w-screen-lg space-y-6 space-y-10">
    <?php require "./views/{$view}.view.php"; ?>
  </main>

  <footer>

  </footer>
</body>

</html>