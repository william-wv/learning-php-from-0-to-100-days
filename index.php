<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portifólio</title>
</head>

<body>
  <?php
  $saudação = "Olá";
  $name = "William";
  $titulo = $saudação . ", Portifólio do " . $name;
  $lang = "php";
  $company = "RocketSeat";
  $paragraph = "Estou aprendendo " . $lang .  " do zero com a " . $company;

  $projeto = "Meu portifólio";
  $finalizado = false; // boolean = true or false/ 1 or 0
  $dataDoProjeto = "2025-05-10";
  $descricaoProjeto = "Meu portifólio: Escrito em PHP e HTML";

  $projetos = [
    "Meu portifolio",
    "Marketplace",
    "AluraBooks"
  ];

  $projetosComSegundArray = [
    [
      "primeiro" => "Meu portifolio",
      "segundo" => "Marketplace",
      "terceiro" => "AluraBooks"
    ]
  ];

  ?>

  <h1><?= $titulo ?></h1>

  <p><?= $paragraph ?></p>

  <hr />

  <div>
    <h2><?= $projeto ?></h2>
    <p><?= $descricaoProjeto ?></p>
    <div>
      <div>Curso PHP:
        <ul>
          <li> Date de inicio: <?= $dataDoProjeto ?></li>
          <li>
            <?php if ($finalizado): ?> <span style="color: green;">✅ Finalizado </span>
            <?php else: ?> <span style="color: red;">❌ Não finalizado</span>
            <?php endif; ?>
          </li>
        </ul>
      </div>
      <hr />
      <div>Somente uma lista de array usando foreach
        <div style="display: flex;">
          <ul>
            <?php foreach ($projetos as $projetos) {
              echo "<li>Nome: {$projetos}</li>";
            }
            ?>
          </ul>
          <ul>
            <?php foreach ($projetosComSegundArray as $projetosComSegundArray) {
              echo "<li>{$projetosComSegundArray['primeiro']}</li>";
              echo "<li>{$projetosComSegundArray['segundo']}</li>";
              echo "<li>{$projetosComSegundArray['terceiro']}</li>";
            }
            ?>
          </ul>
        </div>
      </div>
    </div>

  </div>
</body>

</html>