<?php

  //PRINT

  /*
    O print é uma construção da linguagem PHP muito semelhante ao echo. 
    As principais diferenças são:
      1 - print apenas aceita um argumento
      2 - print retorna sempre o valor 1
  */

  $nome = 'diego';
  $sobrenome = 'barbosa';

  print "$nome $sobrenome <br>";
  print $nome . ' ' . $sobrenome . '<br>';

  if(print($nome)){
    print(" $sobrenome");
  }

  //tal como acontece no echo podemos user o print para 
  //apresentar resultados de uma função
  
  print '<br>';
  print strlen("Ribeiro");

  //preferencialmente devemos usar o echo, por ser mais rápido
  //o echo permite uma sintaxe mais curta no html

?>
