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
      'nome' => 'Meu portfólio',
      'finalizado' => false,
      'dataDoProjeto' => "2025-05-10",
    ],
    [
      'nome' => 'Marketplace',
      'finalizado' => true,
      'dataDoProjeto' => "2025-04-20",
    ],
    [
      'nome' => 'AluraBooks',
      'finalizado' => true,
      'dataDoProjeto' => "2025-03-15",
    ]
  ];

  function verifEstaFinalizado($p)
  {
    if ($p['finalizado']) {
      return '<span style="color: green;">✅ Finalizado </span>';
    } 
      return '<span style="color: red;">❌ Não finalizado</span>';
    
  }
  ?>

  <h1><?= $titulo ?></h1>

  <p><?= $paragraph ?></p>
  <p><?= $descricaoProjeto ?></p>

  <hr />

  <div>
    <h2>Projetos</h2>
    <?php foreach ($projetos as $projeto): ?>
      <h3><?= $projeto['nome'] ?></h3>
      <ul>
        <li>Data de início: <?= $projeto['dataDoProjeto'] ?></li>
        <li>Status: <?=verifEstaFinalizado($projeto); ?></li>
      </ul>
      <hr />
    <?php endforeach; ?>
  </div>

  <div>
    <h2>Lista Simples de Nomes dos Projetos</h2>
    <ul>
      <?php foreach ($projetos as $projeto): ?>
        <li>Nome: <?= $projeto['nome'] ?></li>
      <?php endforeach; ?>
    </ul>
  </div>

</body>

</html>