<?php

  $vezes = 10;
  $min = 0;
  $max = 100;

  //verifica os argumentos
  if($argc == 2){
    $vezes = $argv[1];
  } else if($argc == 4){
    $vezes = $argv[1];
    $min = $argv[2];
    $max = $argv[3];
  }

  $file = fopen(time() . '.txt', 'w');
  for($i = 0; $i < $vezes; $i++){
    fwrite($file, rand($min, $max) . PHP_EOL);
  }
  fclose($file);