<?php

// model
require './bd.php';

view('index' ,[
  'livros' => $livros
]);

