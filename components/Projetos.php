<?php 
$projetos = [
  [
    'nome' => 'Meu portfólio PHP',
    'desc' => 'Aprendendo sobre PHP',
    'finalizado' => false,
    'ano' => 2025,
    'stack' => ["html5","php","tailwind"]
  ],
  [
    'nome' => 'Marketplace',
    'desc' => 'Consumindo API com regra de negócios em VUE',
    'finalizado' => true,
    'ano' => 2025,
    'stack' => ["Vue.js","bootstrap"]

  ],
  [
    'nome' => 'AluraBooks',
    'desc' => 'Primeiro projeto masis completo',
    'finalizado' => true,
    'ano' => 2023,
    'stack' => ["html5","css","javascript"]
  ],
  [
    'nome' => 'Meu portfólio Vue',
    'desc' => 'APortifóilio Vue.js',
    'finalizado' => false,
    'ano' => 2024,
    'stack' => ["Vue.js"]
  ],
  [
    'nome' => 'Cardapio Online',
    'desc' => 'Cardapio para restaurantes',
    'finalizado' => true,
    'ano' => 2024,
    'stack' => ["html5","css","javascript"]
  ],
  [
    'nome' => 'Landing Page Vue',
    'desc' => 'Landing PAge para empresas',
    'finalizado' => true,
    'ano' => 2026,
    'stack' => ["Vue.js"]
  ]
];
?>

<section class="space-y-3 py-6">
      <h2 class="text-2x1 font-bold">Meus Projetos</h2>

      <?php foreach ($projetos as $p) : ?>
      <div class="bg-slate-800 rounded-lg p-3 flex jsutify-between items-center">
        <div class="w-1/5">foto proj</div>
        <div class="w-4/5 space-y-3">
          <div class="flex gap-3 justify-between">
            <h3 class="font-semibold text-xl">
            <?php if($p['finalizado']): ?> ✅ <?php endif; ?> 
              <?= $p['nome'] ?>
              <?php if($p['finalizado']): ?> 
              <span class="text-xs text-gray-400 opacity-50 italic">( finalizado em <?= $p['ano'] ?> )</span>
              <?php else: ?>
                <span class="text-xs text-gray-400 opacity-50 italic">( Em desenvolvimento )</span>

              <?php endif; ?> 
            </h3>
            <div>
              <span
                class="bg-fuchsia-400 text-fuchsia-900 rounded-md px-2 py-px font-semibold medium text-sm">PHP</span>
              <span
                class="bg-red-400 text-red-900 rounded-md px-2 py-px font medium-semibold text-sm">HTML</span>
              <span
                class="bg-blue-400 text-blue-900 rounded-md px-2 py-px font-semibold medium text-sm">Tailwind</span>
            </div>
          </div>
          <p class="leading-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis,
            voluptate? Velit dolorum obcaecati debitis ullam quam, corporis
            ipsam rem earum nulla, aut perspiciatis minus placeat consequuntur
            pariatur veniam quos sit!
          </p>
        </div>
      </div>
      <?php endforeach ?>
    </section>