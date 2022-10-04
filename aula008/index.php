<?php 

  //MAIÚSCULAS E MININÚSCULAS
  
  $a = 'joao ribeiro';
  $b = 'ANA CAROLINA';
  $c = 'Francisco Santos';
  
  //strtoupper - transforma uma string para maiúsculas
  echo strtoupper($a); //JOÃO RIBEIRO
  echo '<br>';
  echo strtoupper($c); //FRANCISCO SANTOS
  echo '<br>';

  $d = 'João Luís';
  echo strtoupper($d); //JOãO LUíS
  echo '<br>';

  echo mb_strtoupper($d); //JOÃO LUÍS - as funções mb_* são designadas por funções
                          //multbyte e estão relacionadas com os sistemas de codificação
                          //de caracteres. É necessário ter ativo o módulo mbstring

  echo '<br>';
                          
  //strtolower - transforma uma string em minúsculas
  echo strtolower($b); //ana carolina
  echo '<br>';

  echo strtolower($c); //francisco santos
  echo '<br>';

  //de modo igual, existe a função mb_strtolower() para
  //resolver as questões dos caracteres acentuados

  echo ucfirst('joão luís');  // João luís
  echo '<br>';
  //se a primeira letra for acentuada não funciona
  echo ucfirst('índice');     // índice
  echo '<br>';


  //lcfirst - transforma a primeira letra de uma string numa letra minúscula
  echo lcfirst('João Ribeiro'); //joão Ribeiro
  echo '<br>';


  //ucwords - transforma todas as primeiras letras de cada palavra numa string em maiúsculas
  echo ucwords('joão ribeiro'); //João Ribeiro