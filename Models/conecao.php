<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbdatabase = 'gestd.dinis';

// Cria a conexão 

$conex = mysqli_connect($dbhost, $dbuser, $dbpass, $dbdatabase) 
or die("Erro: ".mysql_error($com));
mysqli_set_charset($conex, 'utf8');
?>