<?php
// abre conexao com o banco 
require_once 'conectarBanco.php';

$id = $_POST["idusuario"];
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$dataNasc = $_POST["dataNasc"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$cpf = $_POST["cpf"];
$situacao = $_POST["situacao"];

$sql = "UPDATE usuario SET nome = '" . $nome . "', email = '" . $email . "',senha ='" . $senha . "', sobrenome = '" . $sobrenome . "', dataNasc = '" . $dataNasc . "', tel = '" . $tel . "', cpf = '" . $cpf . "', situacao = '" . $situacao . "' WHERE idusuario = " . $id;

$mysqli->query($sql);
$mysqli->close();

header("Location: listandoItens.php");
