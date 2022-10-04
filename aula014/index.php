<?php

  //STR_REPLACE

  /*
    Tal como o nome deixa claro, permite fazer substituição de strings dentro de uma string.
    Neste caso, substituirá todas as ocorrências de uma string que exista dentro de outra string.
  */

  $a = 'Este texto é para exemplo.';
  echo str_replace('te', 'TE', $a); // EsTE TExto é para exemplo.
  echo str_replace(' ', '--->', $a); // Este--->texto--->é--->para--->exemplo.

  //Podemos usar arrays no dois primeiros parâmetros
  $vogais = ['a','e','i','o','u', 'A','E','I','O','U'];
  $b = str_replace($vogais, '', $a); // st txt é pr xmpl.

  $frase = 'Este jantar está muito bom.';
  $original = ['jantar', 'bom'];
  $novos = ['almoço', 'ruim'];

  $final = str_replace($original, $novos, $frase);
  echo $final; // Este almoço está muito ruim.