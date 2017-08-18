<?php

// mail('destinario','assunto','mensagem','from:remetente');
if( mail ("contatolpsistemas@gmail.com", trim($_POST['assunto']), "Nome: --- ".$_POST['nome']." --- Mensagem: ".$_POST['mensagem'], "from:".trim($_POST['email'])."" ) ){
	$retorno = 0;
}else{
	$retorno = 1;
}


if($retorno == 1){

echo('<script>
	alert("O e-mail não foi enviado com sucesso, tente novamente.");	
		window.location.href="index.php";	
	</script>');

}else{
	echo('<script>
	alert("O e-mail foi enviado com sucesso, retornaremos o mais rápido possível");	
		window.location.href="index.php";	
	</script>');
}



?>


</div>
</body>
</html>