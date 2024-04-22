<?php
session_start();
//conexao com o banco de dados
$host = "localhost"; //local do servidor do site
$user = "root"; // nome do usuario do servidor phpmyadmin
$pass = ''; // senha do usuario do servidor phpmyadmin
$banco = "moviestar"; // nome do banco de dadoss criado
$conexao = mysqli_connect($host, $user, $pass, $banco) or die(mysqli_error($conexao)); // fazendo ligação com o banco de dados//
//$conectado = mysqli_select_db($banco) or die ("error" mysqli_error($conectado)); // selecionando o banco de dados
?>