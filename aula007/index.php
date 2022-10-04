<?php 

  //TRIM
  //remove espaços e outros caracteres do início e do final de uma string

  $a = ' isto é uma string.    ';

  $a = trim($a);  //'isto é uma string'
  $b = trim($a);  // $a = ' isto é uma string.    '
                  // $b = 'isto é uma string.'
                  
  echo trim($a);

  //ltrim e rtrim
  //removem espaços e outros caracteres do início ou do fim da string

  echo ltrim($a);
  echo rtrim($a);

  //podemos usar um segundo parâmetro nestas funções
  //serve apenas para remover caracteres
  $a = 'acbdef';
  echo trim($a, 'a'); //'bcdef'
  echo trim($a, 'af'); //'bcde'
  echo trim($a, 'abef'); //'cd'
