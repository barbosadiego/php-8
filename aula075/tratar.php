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
  echo 'Seja bem-vindo!';
} else {
  header('Location: index.html');
}

