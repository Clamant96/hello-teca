<?php 

session_start();

$localhost = "fdb28.awardspace.net";
$user = "3646899_cadastro";
$pass = "";
$bancoDeDados = "3646899_cadastro";

global $pdo;

try{
    // BANCO ORIENTADO A OBJETO - PDO
    $pdo = new PDO("mysql:dbname=".$bancoDeDados."; host=".$localhost, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "ERRO: ". $e->getMessage();
    exit;

}

?>