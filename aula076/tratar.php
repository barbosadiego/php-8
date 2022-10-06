<?php

// verifica se é um POST
if($_SERVER["REQUEST_METHOD"] != 'POST'){
  die('Acesso negado.');
}

// verifica se existe usuario e senha
if(!isset($_POST["usuario"]) || !isset($_POST["senha"])){
  header('Location: index.html');
}

// verifica usuario e senha vazios
if($_POST["usuario"] != '' && $_POST["senha"] != ''){
  //verificar se a checkbox está ativa
  if(!isset($_POST["check_aceitar"])){
    echo 'Por favor aceite os termos para uso.';
    exit();
  }
  echo 'Seja bem-vindo!';
} else {
  header('Location: index.html');
}

