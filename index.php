<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfólio</title>
</head>

<body>
  <?php
  $saudacao = "Olá";
  $name = "William";
  $titulo = $saudacao . ", Portfólio do " . $name;
  $lang = "PHP";
  $company = "RocketSeat";
  $paragraph = "Estou aprendendo " . $lang . " do zero com a " . $company;

  $descricaoProjeto = "Meu portfólio: Escrito em PHP e HTML";

  $projetos = [
    [
      'nome' => 'Meu portfólio PHP',
      'finalizado' => false,
      'ano' => 2025,
    ],
    [
      'nome' => 'Marketplace',
      'finalizado' => true,
      'ano' => 2025,
    ],
    [
      'nome' => 'AluraBooks',
      'finalizado' => true,
      'ano' => 2024,
    ],
    [
      'nome' => 'Meu portfólio Vue',
      'finalizado' => false,
      'ano' => 2024,
    ],
    [
      'nome' => 'Meu portifolio HTML/CSS',
      'finalizado' => true,
      'ano' => 2023,
    ],
    [
      'nome' => 'Landing Page Vue',
      'finalizado' => true,
      'ano' => 2026,
    ]
  ];
  // func anonima
  $verifEstaFinalizado = function ($p) {
    if ($p['finalizado']) {
      return '<span style="color: green;">✅ Finalizado </span>';
    }
    return '<span style="color: red;">❌ Não finalizado</span>';
  };

  function filtro($projetos, $chave,  $valor)
  {

    $filtrados = [];

    foreach ($projetos as $p) {
      if ($p[$chave] === $valor) {
        $filtrados[] = $p;
      }
    }

    return $filtrados;
  }

  $pFriltrados2024 = filtro($projetos, 'ano', 2024);
  $pFriltrados2025 = filtro($projetos, 'ano', 2025);
  ?>

  <h1><?= $titulo ?></h1>

  <p><?= $paragraph ?></p>
  <p><?= $descricaoProjeto ?></p>

  <hr />

  <div>
    <h2>Projetos</h2>
    <div style="display:flex">
      <?php foreach ($projetos as $projeto): ?>
        <ul>
          <h3><?= $projeto['nome'] ?></h3>
          <li>Data de início: <?= $projeto['ano'] ?></li>
          <li>Status: <?= $verifEstaFinalizado($projeto); ?></li>
        </ul>
        <hr />
      <?php endforeach; ?>
    </div>
  </div>

  <div>
    <h2>Projetos 2024</h2>
    <ul>
      <?php foreach ($pFriltrados2024 as $projeto): ?>
        <li><?= $projeto['nome'] ?> - <?= $verifEstaFinalizado($projeto); ?></li>
      <?php endforeach; ?>
    </ul>
  </div>

  <div>
    <h2>Projetos 2025</h2>
    <ul>
      <?php foreach ($pFriltrados2025 as $projeto): ?>
        <li><?= $projeto['nome'] ?> - <?= $verifEstaFinalizado($projeto); ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
</body>

</html>