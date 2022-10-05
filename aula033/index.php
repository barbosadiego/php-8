<?php

  //FILESYSTEM

  /*
    Porquê utilizar os handles/apontadores?
    Vamos fazer um exercício simples: ler os dados de um ficheiro e guardar noutro.
  */

  //cria os dois ponteiros
  $origem = fopen('dados.txt', 'r');
  $destino = fopen('dados_finais.txt', 'w');

  //lê da origem e grava no destino
  while(!feof($origem)){
    fwrite($destino, fgets($origem));
  }

  //fecha os dois handles
  fclose($origem);
  fclose($destino);