<?php

use EasyPDO\EasyPDO;

defined('CONTROLE') or die('Acesso negado.');

$rota = null;

if (!verifica_sessao() && $_SERVER["REQUEST_METHOD"] != 'POST') {
  $rota = 'login';
} elseif (!verifica_sessao() && $_SERVER["REQUEST_METHOD"] == 'POST') {
  $rota = 'login_submit';
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
    $resultado = $bd->select("SELECT id_usuario, usuario FROM usuarios WHERE usuario = :usuario", $parametros);
    print_r($resultado);
    //concectar à base de dados
    break;

  default:

    # code...
    break;
}
