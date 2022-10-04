<?php

  //  EXPLODE e IMPLODE

  /*
    A utilização de arrays como coleções de dados é algo praticamente presente
    em todas as aplicações de PHP. Existem funções de string também relacionadas 
    com arrays e estas duas são exemplo disso.
  */

  // EXPLODE
  // Permite transformar uma string num array de strings, recorrendo a um caracter de separação

  $str_nomes = 'joao, carlos, ana, antonio';
  $nomes = explode(',', $str_nomes);

  //$nomes = ['joao', 'carlos', 'ana', 'antonio']

  // IMPLODE
  // Permite "colar" uma string num conjunto de elementos de um array.

  $nomes = ['joao', 'carlos', 'ana', 'antonio'];
  $str_nomes = implode('|', $nomes);

  //$nomes = 'joao|carlos|ana|antonio'