<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "login";
$port = 3306;

try{
    //Conexão com a porta
    $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

}catch(PDOException $err){
    echo "Erro: Conexão com banco de dados não realizado com sucesso. Erro gerado " . $err->getMessage();
}