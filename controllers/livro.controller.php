<?php

// model
require './bd.php';

$id = ($_REQUEST['id']);

$filtrado = array_filter($livros, fn($l) => $l['id'] == $id);
$livro = array_pop($filtrado);

view('livro' ,[
  'livro' => $livro
]);
