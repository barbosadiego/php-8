<?php

  //STR_SPLIT

  //Permite criar um array de caracteres a partir de uma string

  $frase = 'frase de teste';
  $a = str_split($frase);

  //Podemos usar um segundo argumento, opcional, para definir
  //o números de caracteres de cada valor do array criado.
  
  $b = str_split($frase, 3);