<?php
require './bd.php';

$id = ($_REQUEST['id']);
$filtrado = array_filter($livros, fn($l) => $l['id'] == $id);
$livro = array_pop($filtrado);

// echo '<pre>';
// var_dump($livros);
// echo '</pre>';
$view = "livro";
require "./views/template/app.php";

?>