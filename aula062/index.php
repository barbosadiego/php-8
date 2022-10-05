<?php

  //COOKIES

  if(isset($_COOKIE["meu_cookie"])){
    echo $_COOKIE["meu_cookie"];
  } else {
    setcookie('meu_cookie', date('H:i:s'));
  }

  echo '<p>terminado</p>';