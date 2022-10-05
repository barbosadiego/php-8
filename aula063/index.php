<?php

  //COOKIES - criar um cookie com tempo de vida

  if(!isset($_COOKIE["visitou_o_site"])){
    //primeira visita
    setcookie('visitou_o_site', true, time() + 3600);
    echo 'É a primeira visita ao site. Bem-vindo!';
  } else {
    //apresentar mensagem
    echo 'Você já esteve neste site na última hora. Seja bem vindo!';
  }
