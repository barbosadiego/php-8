<?php

  $voltas = isset($argv[1]) ? $argv[1] : 10;
  // $voltas será 10 ou o valor de $argv[1]

  for($i = 0; $i <= $voltas; $i++){
    echo $i . PHP_EOL;
  }
  
  echo 'total de params: ' . $argc;