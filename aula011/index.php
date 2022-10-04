<?php

  /*
    Nas regras de negócio do nosso código vamos necessitar usar funções
    que permitem verificar qual o conteúdo de uma string.
    Se contém outra string, se começa pela letra X, termina com Y ou
    quantas letras A possui.
    O PHP oferece várias funções para essa finalidade.
  */

  $a = 'Esta frase é usada para testes.';

  //str_contains - verifica se um string existe dentro da outra e retorna true ou false

  $b = 'para';
  if(str_contains($a, $b)){
    echo 'sim'; //<<<<<<
  } else {
    echo 'não';
  }

  echo '<br>';

  $c = 'usa';
  if(str_contains($a, $c)){
    echo 'sim'; //<<<<<<
  } else {
    echo 'não';
  }

  echo '<br>';

  $d = 'ua';
  if(str_contains($a, $d)){
    echo 'sim'; 
  } else {
    echo 'não'; //<<<<<<
  }

  echo '<br>';

  // Para percebermos se uma string começa ou acaba com uma determinada string
  // usamos as funções str_ends_with() e str_starts_with()
  // ambas são case sensitive

  if(str_starts_with($a, 'e')){
    echo 'sim'; 
  } else {
    echo 'não'; //<<<<<<
  }

  echo '<br>';