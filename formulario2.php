<?php

// mail('destinario','assunto','mensagem','from:remetente');
if( mail ("contatoupsistemas@gmail.com", trim($_POST['assunto']), "Nome: --- ".$_POST['nome']." --- Mensagem: ".$_POST['mensagem'], "from:".trim($_POST['email'])."" ) ){
	$resultado = "Sua mensagem foi enviada com sucesso.";
}else{
	$resultado = "Sua mensagem NÃO foi enviada. <a href='formulario.php'>Clique aqui</a> para voltar e tentar novamente.";
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	REQUIRE_ONCE("estilos.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8">
<title>Confirmação de E-mail</title>
</head>

<body>
<style type="text/css">
	
	body{
		background-image: url("funfo4.png");
		background-position: bottom right;
		background-repeat: no-repeat;
		background-size: 30%;
		background-color: black;
	}
</style>
</body>
</html>