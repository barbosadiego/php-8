<?php

  //STRIPOS E STRRIPOS
  /*
    Com as funções srtpos e strrpos vamos buscar a posição de uma neddle
    dentro de uma haystack. No caso dessas funções, elas são case sensitive.
    Se pretendermos fazer a mesma pesquisa, mas por case insensitive, usamos as funções stripos e strrips
  */

  $a = 'Frase de teSte no sistema.';
  $pos = strpos($a, 'S'); // 11
  $pos = stripos($a, 'S'); // 3

  
  