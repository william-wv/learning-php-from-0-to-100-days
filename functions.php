<?php

function dd(...$dump){
  echo '<pre>';
  var_dump($dump);
  echo '</pre>';
  die();
}

function view($view , $data = []){

  foreach ($data as $key => $value){
    $$key = $value;
  }
  require "./views/template/app.php";
}

function abort($code){
  http_response_code($code);
  // require "views/$code.php";
  view($code);
  die();
}