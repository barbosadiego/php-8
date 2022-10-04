<?php

  //FILESYSTEM - CRIAR PASTAS NO PHP
  //Escrever valor em cada linha do arquivo

  $arquivo = fopen('dados.txt', 'a');
  for($i = 1; $i <= 10; $i++){
    fwrite($arquivo, "Esta linha contém o valor: " . rand(0,100) . PHP_EOL);
  }
  fclose($arquivo);