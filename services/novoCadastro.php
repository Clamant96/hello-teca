<?php
 
//$mysqli = new mysqli("fdb22.awardspace.net","3486769_cadastro","Edkaike1","3486769_cadastro");
//$mysqli = new mysqli("localhost","root","","cadastro");

/*if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}*/

require_once 'conectarBanco.php';

$usuario = $_POST["nome"]; 
$sobrenome = $_POST["sobrenome"];
$dataNasc = $_POST["dataNasc"];
$tel = $_POST["tel"];
$senha   = $_POST["senha"]; 
$email   = $_POST["email"];
$cpf = $_POST["cpf"];
$status  = 1;

//$sql = "INSERT INTO usuario (nome, email, senha, situacao) VALUES ('$usuario', '$email', '$senha', '$status')"; 
$sql = "INSERT INTO usuario (nome, email, senha, sobrenome, dataNasc, tel, cpf, situacao) VALUES ('$usuario', '$email', '$senha', '$sobrenome', '$dataNasc', '$tel', '$cpf', '$status')"; 

$mysqli -> query($sql);

$mysqli -> close();

header('Location: login.php');
 
?>