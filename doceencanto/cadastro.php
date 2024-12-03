<?php
require_once "cliente.php";
$nome = $_GET['nome']; 

$email = $_GET['email'];


$telefone = $_GET['telefone'];


$comentarios = $_GET['comentarios'];


$cliente = new cliente();

$cliente->setnome($nome);
$cliente ->setemail($email);
$cliente -> settelefone($telefone);
$cliente -> setcomentarios($comentarios);

$cliente -> cadastrar();




?>
<a href="index.html">Voltar</a>