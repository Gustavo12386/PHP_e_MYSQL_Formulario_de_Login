<?php

$hostname = "127.0.0.1";
$bancodedados = "meubanco";
$usuario = "root";
$senha = "Gusang_20011";

//criar e instanciar a variavel mysqli
$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

//if ($mysqli->connect_errno){
//    echo "Falha ao conectar:(" . $mysqli->connect_errno .")" . $mysqli->connect_error;
//} else{
//    echo "Conectado!";
//}
//connect_errno(errornumber): ira mostrar o numero do erro e connect_error: ira mostrar o tipo do erro