<?php

$host = "sql818.main-hosting.eu";
$user = "u531117276_femarh";
$pass = "Femarh@ci22";
$dbname = "u531117276_femarh";
$port = 3306;








try{
    //Conexão com a porta
   $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

    //Conexão sem a porta
    //$conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    //echo "Conexão com banco de dados realizado com sucesso!";
}catch(PDOException $err){
    //echo "Erro: Conexão com banco de dados não realizado com sucesso. Erro gerado " . $err->getMessage();
}


?>