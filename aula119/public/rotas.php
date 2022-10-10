<?php

use EasyPDO\EasyPDO;

defined('CONTROLE') or die('Acesso negado.');

$rota = null;

if (!verifica_sessao() && $_SERVER["REQUEST_METHOD"] != 'POST') {
  $rota = 'login';
} elseif (!verifica_sessao() && $_SERVER["REQUEST_METHOD"] == 'POST') {
  $rota = 'login_submit';
} else {
  $rota = 'logado';
}

//apresentar os layouts
switch ($rota) {
  case 'login':

    //apresentação do formulário de login
    require_once('../views/login_frm.php');
    break;

  case 'login_submit':

    //tentativa de login
    $bd = new EasyPDO();
    $parametros = [
      ':usuario' => $_POST["usuario"]
    ];
    $resultado = $bd->select("SELECT id_usuario, usuario, senha FROM usuarios WHERE usuario = :usuario", $parametros);

    if(count($resultado) == 0){
      // die('erro');
      $erro = "Login inválido 1";
      require_once('../views/login_frm.php');
      return;
    }

    $usuario = $resultado[0];

    //verificar a senha
    if(password_verify($_POST["senha"], $usuario['senha'])){
      $_SESSION["usuario"] = $usuario['usuario'];
      return;
    } else {
      // die('erro');
      $erro = "Login inválido 2";
      require_once('../views/login_frm.php');
      return;
    }

    break;

  case 'logado':

    $bd = new EasyPDO();
    $usuarios = $bd->select("
      SELECT 
      AES_DECRYPT(nome_completo, UNHEX(SHA2('". AES_KEY ."',512))) nome_completo
      FROM usuarios
    ");

    print_r($usuarios);

    break;
}
