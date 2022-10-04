<?php

  //SUBSTR
  //Usada para capturarmos uma parte de uma string

  $a = 'Esta frase é para testes.';
  $b = substr($a, 5, 10); // $b = 'frase é p'

  /*
    Se verificarmos o que aconteceu, a variável b apenas ficou com 9 caracteres
    e não com os 10 a partir da posição 5.
    Mais uma vez teremos que usar a versão multibytes - mb_substr()
    Se usarmos o índice com um valor negativo, então estamos dizento à função 
    para extrair a partir do fim.
  */

  $c = substr($a, -4, 2); // 'te'