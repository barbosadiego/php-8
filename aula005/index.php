<?php

  //INSTRUÇÕES CONDICIONAIS DO PHP NO HTML

  $aprensentar = true;  

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
    if($aprensentar){
      echo '<p>Este parágrafo é para ser apresentado</p>';
    } else {
      echo '<p>Não existe nada para apresentar</p>';
    }
  ?>

  <!-- mais aconselhável -->
  <?php if($aprensentar): ?>
    <p>Este parágrafo dever ser apresentado.</p>
  <?php else: ?>
    <p>Nada para exibir.</p>
  <?php endif;?>

</body>
</html>
