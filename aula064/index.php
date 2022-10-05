<?php

  //COOKIES - criar um cookie com tempo de vida

  /*
    O tempo de vida de um cookie é definido em segundos.
    Vamos ver o exemplo de um cookie que só tem 10 segundos
    de duração, e um que tem 1 ano.
  */

  if(!isset($_COOKIE["visitou_o_site_2"])){
    //primeira visita
    setcookie('visitou_o_site_2', true, time() + 10);
    //setcookie('visitou_o_site_2', true, time() + 365*24*60*60); // 1 ano
    echo 'É a primeira visita ao site. Bem-vindo!';
  } else {
    //apresentar mensagem
    echo 'Você já esteve neste site na última hora. Seja bem vindo!';
  }
