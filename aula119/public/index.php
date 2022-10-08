<?php 
  //inicio do sistema de sessões
  session_start();

  //definir uma constante de controle
  define('CONTROLE', true);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <title>Clube</title>
</head>
<body>

  <h3>CLUBE</h3>

  <?php 
    // requerer scripts estruturais
    require_once('../libs/config.php');
    require_once('../libs/EasyPDO.php');
    require_once('../libs/functions.php');

    //definir as rotas
    require_once('rotas.php');
  ?>

  <script src="assets/bootstrap.bundle.min.js"></script>
</body>
</html>