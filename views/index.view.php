<form class="w-full flex space-x-2 mt-6">
  <input type="text" class="border-stone-800 bg-stone-900 border-2 rounded-md text-sm focus:outline-none px-2 py-1" placeholder="Pesquisar..." name="pesquisar">
  <button type="submit">🔎</button>
</form>

<section class=" grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

  <?php foreach ($livros as $livro): ?>
    <div class=" p-2 rounded border-stone-800 border-2 bg-stone-900">
      <div class="flex">
        <div class="w-1/3">img</div>
        <div class="space-y-1">
          <a href="/livro?id=<?= $livro['id'] ?>" class="font-semibold  hover:underline"><?= $livro['nome'] ?></a>
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