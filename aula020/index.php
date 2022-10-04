<?php

  //NUMBER_FORMAT
  /*
    Apresenta um número formatado de várias formas.
  */

  
  $valor = 100;
  echo number_format($valor, 2, ',', null); //100,00
  $valor = 123456.789;
  echo number_format($valor, 2, ',', '.'); //123.456,79
  
  