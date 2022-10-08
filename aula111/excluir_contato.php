<?php 

// eliminar contato
if(!isset($_GET["id"])){
  die('Acesso inválido!');
}

$id_contato = $_GET["id"];

 // eliminar da base de dados
 require_once('inc/config.php');
 require_once('inc/EasyPDO.php');
 $bd = new EasyPDO\EasyPDO(MYSQL_OPTIONS);
 $parametros = [
  ':id_contato' => $id_contato,
 ];

 $bd->delete("DELETE FROM dados WHERE id_contato = :id_contato", $parametros);

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato eliminado</title>
 </head>
 <body>
    <h2>Contato excluído com sucesso.</h2>
    <div>
      <a href="ver_contatos.php">Voltar</a>
    </div>
 </body>
 </html>