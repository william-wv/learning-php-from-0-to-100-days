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
  ?>

  <h1><?= $titulo ?></h1>

  <p><?=$paragraph ?></p>

</body>

</html>