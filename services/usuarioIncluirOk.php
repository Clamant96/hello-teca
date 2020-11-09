<?php
// abre conexao com o banco 
require_once 'conectarBanco.php';

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$dataNasc = $_POST["dataNasc"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$cpf = $_POST["cpf"];
$situacao = $_POST["situacao"];

//monta sql para o banco de dados
$sql = "INSERT  INTO usuario (nome,email,senha,sobrenome,dataNasc,tel,cpf,situacao) VALUES ('" . $nome . "','" . $email . "','" . $senha . "','" . $sobrenome . "','" . $dataNasc . "','" . $tel . "','" . $cpf . "','". $situacao ."')";

$mysqli->query($sql);
// echo "New record has id: " . $mysqli -> insert_id;
$mysqli->close();

header("Location: listandoItens.php");
