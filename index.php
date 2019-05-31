<?php 
@session_start();

include_once('conexao.php');

?>

    <?php 
if(isset($_POST['gravar'])) {
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];


$sql = $pdo->query("INSERT INTO `tb_sala` (`id`, `nome`, `email`, `senha`) VALUES (NULL, '$nome', '$email', '$senha');");   
}
    
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

	<section>
        <div class="container">
            <div class="header-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div style="margin-top:130px;"></div>
                        <p style="color:#D3AF19; margin: 100px 0 10px; font-weight: 700">
                                Curso
                        </p>
                        <h1>Análise e Desenvolvimento de Sistemas</h1>
                        <p>
                                Bem vindo a está maravilhosa aventura no mundo da tecnologia!
                                Que tal aprender sobre programação ou quem sabe redes, mas se não gostar tente design!  
                        </p>
                        <div class="group-btn">
                        <a href="#" class="theme-btn" data-toggle="modal" data-target="#siteModal">Entrar</a>
                        <a href="" class="theme-btn">Cadastrar</a>
                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        <div style="margin-top: 130px;"></div>
                        
                        <img src="Group.svg" class="img-fluid" alt="">
                        <div class="group">
                            <div class="box">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="box">
                                <i class="fas fa-robot"></i>
                            </div>
                            <div class="box">
                                <i class="fab fa-internet-explorer"></i>
                            </div>
                            <div class="box">
                                <i class="fas fa-microchip"></i>
                            </div>
                            <div class="box">
                                <i class="fas fa-database"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <a href="#page-2" class="circle"><i class=" fas fa-chevron-down" ></i></a>  
                </div>
            </div>
        </div>
       <div class="modal" id="siteModal" tabindex="-1" role="dialog">
           <div class="modal-dialog" role = "document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title">Modal</h5>
                       <button type="button" class="close" data-dismiss = "modal"><span>x</span></button>
                       
                   </div>
                   <div class="modal-body">
                       test
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-danger" data-dismiss = "modal">fechar</button>
                   </div>
               </div>
           </div>
       </div>
    </section>
</body>
</html>