<?php

  //FILESYSTEM - CRIAR PASTAS NO PHP

  /*
    O processo main linear para gravação de textos num arquivo é o seguinte
    1 - Criar um variável, também conhecida como handle, que é o apontador para o ficheiro
    2 - Escrever texto usando funções com esse apontador
    3 - Fechar o apontador
  */

  $arquivo = fopen('dados1.txt', 'a');
  fwrite($arquivo, 'Primeira frase.');
  fwrite($arquivo, 'Segunda frase.');
  fclose($arquivo);