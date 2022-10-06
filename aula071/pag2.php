<?php
  // tratar variável que não exite
  if(!isset($_GET["nome"])){
    //exit();
    //die();
    header('Location: pag1.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php 
    $nome = $_GET["nome"];
  ?>

  <h1>Página 2</h1>

  <p><?= $nome ?></p>
  
  <a href="pag1.php">Ir para a página 1</a>

</body>
</html>