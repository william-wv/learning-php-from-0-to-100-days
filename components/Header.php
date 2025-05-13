<?php
$items  = [
  ['href' => '#projetos', 'texto' => 'Projetos'],
  ['href' => '', 'texto' => 'GitHub'],
  ['href' => '', 'texto' => 'LinkedIn'],
];
?>


<header
  class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
  <!-- logo -->
  <div class="font-bold text-xl text-cyan-600">William Wendling Veiga</div>
  <!-- links -->
  <div class="">
    <ul class="font-medium text-gray-200 flex gap-x-3 font">
      <?php foreach ($items as $item): ?>
      <li>
        <a href="<?=$item['href']?>" class="hover:underline">
          <?=$item['texto']?>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
</header>