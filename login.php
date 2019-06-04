<?php
  //CONEXÃO COM O BANCO
  ini_set('display_errors', 1);
  error_reporting(~0);

  $serverName = "localhost";
  $userName = "sa";
  $userPassword = '';
  $dbName = "PORTAL";

  $connectionInfo = array("Database"=>$dbName, "UID"=>$userName, "PWD"=>$userPassword, "MultipleActiveResultSets"=>true);

  $conn = sqlsrv_connect( $serverName, $connectionInfo);

  if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
  }
    

  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>
	<div class="content">
		<div class="">
      <form id="signup">
        <br>
        <p><a href="index.php"><i class="fas fa-arrow-left"></i> Voltar</a></p>
        <br>
        
        <div class="sep"></div>

        <div class="inputs">
            <br>
            <input type="email" id="email" placeholder="e-mail" autofocus />
            <br>
        
            <input type="password" id="senha" placeholder="Password" />
            
            <a id="submit" href="portal.php">entrar</a>
             <div>
              <br>
              <a href="">Esqueci minha senha</a><br><br>
              <a href="">Não possui cadastro?</a>
            </div>
        
        </div>

    </form>	
  	</div>   		
  </div>
</body>
</html> 