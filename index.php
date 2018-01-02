<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="images/icone.ico" type="image/x-icon">
<title>Foco</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 

<script src="js/jquery-2.2.3.min.js"></script>

<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>

  <div class="main-agileits">
    <div class="mainw3-agileinfo form">
    <h1 style="margin-bottom: 2%;">Entrada do sistema</h1>    
      <div id="login">    
        <form action="index.php" method="post"> 
          <div class="field-wrap">
            <label> Login</label>
            <input type="text" name="login" required />
          </div> 
          <div class="field-wrap">
            <label> Senha</label>
            <input type="password" name="senha" required />
          </div> 
          
          <input type="submit" name="btLogar" class="button button-block" value="Entrar">
        </form> 
      </div>
         
    </div>  
  </div>  
  
  <script>
  $('.form').find('input, textarea').on('keyup blur focus', function (e) { 
    var $this = $(this),
      label = $this.prev('label');

      if (e.type === 'keyup') {
        if ($this.val() === '') {
        label.removeClass('active highlight');
      } else {
        label.addClass('active highlight');
      }
    } else if (e.type === 'blur') {
      if( $this.val() === '' ) {
        label.removeClass('active highlight'); 
        } else {
        label.removeClass('highlight');   
        }   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
        label.removeClass('highlight'); 
        } 
      else if( $this.val() !== '' ) {
        label.addClass('highlight');
        }
    }
 
  }); 
  </script>
</body>
</html>


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

  header('location: pagina_inicial.php');
}



 ?>