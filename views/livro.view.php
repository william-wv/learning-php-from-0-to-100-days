<div class=" p-2 rounded border-stone-800 border-2 bg-stone-900">
  <div class="flex">
    <div class="w-1/3">img</div>
    <div class="space-y-1">
      <a  class="font-semibold  hover:underline"><?= $livro['nome'] ?></a>
      <div class="text-xs italic"><?= $livro['autor'] ?></div>
      <div class="text-xs italic">3 avaliações</div>
    </div>
  </div>
  <div>
    <?= $livro['descricao'] ?>
  </div>
</div>