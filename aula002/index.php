<?php
 $nome = 'diego';
 $sobrenome = 'barbosa';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .text-vermelho{
      color: red;
    }
  </style>
</head>
<body>
  <?php echo $nome . $sobrenome ?> <br>
  <?php echo "$nome $sobrenome" ?> <br>
  <?php echo $nome . ' ' . $sobrenome ?> <br>
  <?php echo $nome, ' ', $sobrenome ?> <br>
  <?php echo "<h3>$nome $sobrenome</h3>" ?> <br>
  <h3><?php echo "$nome $sobrenome" ?></h3> <br>
  <?php echo "<h3 class=\"text-vermelho\">$nome $sobrenome</h3>" ?> <br>
  <?php echo '<h3 class="text-vermelho">', "$nome $sobrenome", "</h3>" ?> <br>
  <?= '<h3 class="text-vermelho">', "$nome $sobrenome", '</h3>' ?> <br>
  <p>Nome do cliente: <?= "<strong>$nome $sobrenome</strong>" ?></p>  
  <p>Nome do cliente: <strong><?= "$nome $sobrenome" ?> </strong></p> 
  <p><?= substr($sobrenome, 0, 4) ?></p>
</body>
</html>