<?php 

 /*
  O PHP possui uma funão muito simples de usar para criar strings com um
  determinado número de repetições concatenadas.
 */

 $a = str_repeat('-', 20); // $a = '--------------------------------'
 $b = str_repeat('=|', 5); // $b = '=|=|=|=|=|'

 //Para padrões com mais lógica de programação existe a função str_pad

 $valor = 100;
 echo str_pad($valor, '30', '.', STR_PAD_LEFT); // ...........................100

 /*
  pad_types:
    STR_PAD_LEFT
    STR_PAD_RIGHT
    STR_PAD_BOTH
 */

  echo '<br>';
  echo '<pre>';
  $valores = [100,2100,1986,8763428,76];
  foreach($valores as $valor){
  echo str_pad($valor, '30', '.', STR_PAD_LEFT) . '<br>';
  }

  /*
    ...........................100
    ..........................2100
    ..........................1986
    .......................8763428
    ............................76
  */  