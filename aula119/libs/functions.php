<?php
  
  function verifica_sessao(){
    return isset($_SESSION["usuario"]);
  }