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

    <form class="w-full flex space-x-2 mt-6">
      <input type="text" class="border-stone-800 bg-stone-900 border-2 rounded-md text-sm focus:outline-none px-2 py-1" placeholder="Pesquisar..." name="pesquisar">
      <button type="submit">🔎</button>
    </form>

    <section class=" grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
      <!-- livro -->
      <?php foreach ($livros as $livro): ?>
        <div class=" p-2 rounded border-stone-800 border-2 bg-stone-900">
          <div class="flex">
            <div class="w-1/3">img</div>
            <div class="space-y-1">
              <a href="/livro.php?id=<?= $livro['id'] ?>" class="font-semibold  hover:underline"><?= $livro['nome'] ?></a>
              <div class="text-xs italic"><?= $livro['autor'] ?></div>
              <div class="text-xs italic">3 avaliações</div>
            </div>
          </div>
          <div>
            <?= $livro['descricao'] ?>
          </div>
        </div>
      <?php endforeach ?>
    </section>
  </main>

  <footer>

  </footer>
</body>

</html>