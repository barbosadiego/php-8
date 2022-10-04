<?php

  //FILESYSTEM - CRIAR PASTAS NO PHP

  //A melhor prática na criação de pastas é utilizar caminhos absolutos
  //rmdir('teste');
  mkdir(dirname(__FILE__) . '/pasta1');