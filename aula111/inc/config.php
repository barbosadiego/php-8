<?php

define('MYSQL_OPTIONS', [
  'db_host' => 'localhost',
  'db_name' => 'contatos',
  'db_user' => 'user_contatos',
  'db_pass' => 'BA4eYe5O8i8a',
  'db_char' => 'utf8',
]);

define('AES_KEY', '6hME3UJaXFrrm1VBVQsZzrbXcWzgpaw0');
define('AES_IV', '8CpK6PES18JOj5cY');

function aes_encriptar($valor){
  return bin2hex(openssl_encrypt($valor, 'aes-256-cbc', AES_KEY, OPENSSL_RAW_DATA, AES_IV));
}

function aes_desencriptar($hash){
  // verificar se a hash é válida
  if(strlen($hash) % 2 != 0){
    return -1;
  }

  return openssl_decrypt(hex2bin($hash), 'aes-256-cbc', AES_KEY, OPENSSL_RAW_DATA, AES_IV);
}