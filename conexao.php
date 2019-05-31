<?php 
$hostname = 'localhost';
$username = 'adm';
$password = 'adm';
$database = 'eliezer'; 

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $password,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
 	// echo 'Conexao efetuada com sucesso!';
	}

catch(PDOException $e)
	{//esse trecho manda uma mensagem de erro caso ocorra erro na conexão
    	echo $e->getMessage("Erro na conexão");
	}

?>
