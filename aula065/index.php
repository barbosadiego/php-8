<?php

  // COOKIES - COMO REMOVER UM COOKIE

  // criar o cookie
  //setcookie('leu_as_condicoes', true, time() + (365*24*60*60), '/');

  // verificar se existe o cookie
  if(isset($_COOKIE["leu_as_condicoes"])){
    setcookie('leu_as_condicoes', null, -1, '/');
    echo '<p>cookie eliminado</p>';
  }

  echo '<p>terminado</p>';