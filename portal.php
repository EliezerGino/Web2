<?
$sql = "INSERT INTO QUESTOES (DESCRICAO, MATERIA, PERGUNTA, RESPOSTA, VALUES (?, ?, ?, ?)";
	//PAMETRO PARA O INSERT
	$params = array($_POST["txtDESCRICAO"], $_POST["txtMATERIA"], $_POST["txtPERGUNTA"], $_POST["txtRESPOSTA"]);
	$stmt = sqlsrv_query( $conn, $sql, $params);

	if( $stmt === false ) {
		 die( print_r( sqlsrv_errors(), true));
	}
	else
	{
		echo "Sucesso";
	}
	//SELECT DAS INFORMAÇÕES
	$sql = "SELECT MATERIA, PERGUNTA, RESPOSTA FROM QUESTOES";
	$stmt = sqlsrv_query( $conn, $sql );
	if( $stmt === false) {
	    die( print_r( sqlsrv_errors(), true) );
	}
	if($sql){
  	while($row=sqlsrv_fetch_array($sql)){
    $flag[]=$row;
  	}
  print (json_encode($flag));
   }
	sqlsrv_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title></title>

</head>
<body>
	<div class="container">
  		<div class="row">
  			<div class="col-sm">
  				<nav class="navbar navbar-light bg-light">
				  <a class="navbar-brand">Portal</a>
				  <form class="form-inline">
				    <input class="form-control mr-sm-2" type="search" placeholder="Parava Chave" aria-label="Search">
				    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
				  </form>
				</nav>
   			</div>

  		</div>
  		<br>
  		<div class="row">
  			<div class="col-sm">
  				<form>
				  <div class="dropdown">
					  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Selecione a disciplina
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" href="#">POO2</a>
					    <a class="dropdown-item" href="#">Desenvolvimento WEB II</a>
					    <a class="dropdown-item" href="#">Interface Homem Maquina</a>
					  </div>
					</div>
					<br>
				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Questão</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Resposta</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				  </div>
				  <button type="button" class="btn btn-success">Confirmar</button>

				</form>
  			</div>
  		</div>
  	</div>

</body>
</html>