<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
		
	body {

    background: url(lea1.png)no-repeat center;
    background-attachment: fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover; 
	background-size: cover;
	}

	.aqui{
    border: 0;
    outline: none;
    padding: 1.1em;
    font-size: 1em;
    font-weight: 600;
    text-transform: uppercase;
    background:#8B0000;
    color: #fff;
    cursor: pointer;
    -webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
    transition: all 0.5s ease;
    -webkit-appearance: none;
    margin-top:2.2em;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px; 
	border-radius: 5px;
	}

	</style>

  <?php
    include 'bootstrap.php';
  ?>

  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 

<script src="js/jquery-2.2.3.min.js"></script>

<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>


  <title>Página Inicial</title>
</head>
<body>



<div class="main-agileits w3-center">
    <div class="mainw3-agileinfo form" style="width: 80%;">
    <h1 style="margin-bottom: 2%;">Bem-Vindo ao Sistema Gerencial Foco</h1>    
      <div id="login">
   	<a href="form.php"><button class="aqui w3-hover-red" style="height: 80px;">Realizar nova matrícula</button></a>
  	<a href="matriculados.php"><button class="aqui w3-hover-red" style="height: 80px;">Ver alunos matriculados</button></a>
  	<button class="aqui w3-hover-red" style="height: 80px;">Cadastrar novo admnistrador</button>
      </div>
         
    </div>  
  </div>  

 

</body>
</html>    
