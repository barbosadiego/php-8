<?php 

  //COMO CONTAR O NÚMERO DE CARACTERES DE UMA STRING

  /*
    Muitas vezes vamos necessitar calcular o número de caracteres de uma string.
    Com muita frequência recerremos rapidamente ao uso da função srtlen
  */

  $a = 'Uma frase para testes.';
  $comprimento = strlen($a);
  echo $comprimento; //22

  //quando uma variável é nula ou vazia
  $b = null;
  $c = '';
  //echo strlen($b); //0
  echo strlen($c); //0

  //quando uma variável é boleana
  $sim = true;
  $nao = false;

  echo strlen($sim); // 1
  echo strlen($nao); // 0

  //quando uma variável é numérica
  $numero = 1250;
  echo strlen($numero); // 4 (conversão implícita)