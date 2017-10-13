<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="icons_google.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="js/lumino.glyphs.js"></script>

	<title>Login</title>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<label class="navbar-brand" href="#"><span>Foco </span>- Cursos Preparatórios</label>
			</div>
		</div>
</nav>

<style type="text/css">
body {
  background-image: url('fundo_log.png');
  background-repeat: no-repeat;
  background-position: bottom right;
  background-attachment: fixed;
  background-color: black;
}

.form-signin input[type="text"] {
        margin-bottom: 5px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }
    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
    .form-signin .form-control {
        position: relative;
        font-size: 16px;
        font-family: 'Open Sans', Arial, Helvetica, sans-serif;
        height: auto;
        padding: 10px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .vertical-offset-100 {
        padding-top: 100px;
    }
    .img-responsive {
    display: block;
    max-width: 80%;
    height: auto;
    margin: auto;
    }
    .panel {
    margin-bottom: 20px;
    background-color: rgba(255, 255, 255, 0.75);
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    }

</style>

        <body>
            <div class="container w3-animate-top">
                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <div class="row-fluid user-row">
                                    <label>Login do Sistema</label>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="index.php" method="post">
                                    
                                        
                                        <input class="form-control" placeholder="Login" name="login" type="text" required></br>
                                        <input class="form-control" placeholder="Senha" name="senha" type="password" required>
                                        <br>
            <input type="submit" class="w3-button btn-lg w3-black btn-block w3-hover-blue" name="btLogar" value="ENTRAR »">
                                  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
</body>


<?php

             include ('conexao.php');

              if(isset($_POST['btLogar'])){

    $login = $_POST['login'];
    $senha = $_POST['senha'];


 $log = "select * from login_sistema WHERE login ='$login' and senha = '$senha'";

  $query = mysqli_query($conexao, $log) or die(mysql_error());
  $qtd = mysqli_num_rows($query);

  if($qtd == 0){
    die('<script>alert("Login ou Senha Incorretos");</script>');
  }else{
  @session_start();
  $_SESSION['login'] = $login;
  }

  header('location: form.php');
}



 ?>
</html>