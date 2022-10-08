<?php 

  defined('CONTROLE') or die('Acesso negado.');

  $rota = null;

  if(!verifica_sessao()){
    $rota = 'login';
  } else {
    $rota = 'logado';
  }

  //apresentar os layouts
  switch ($rota) {
    case 'login':
      require_once('../views/login_frm.php');
      break;
    case 'label':
      # code...
      break;
    default:
      # code...
      break;
  }
