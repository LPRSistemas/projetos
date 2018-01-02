<!DOCTYPE html>
<html>
<head>
	<title>Validação dos dados</title>

<?php

	include 'bootstrap.php';
	include 'conexao.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rua = $_POST['rua'];
$numero_casa = $_POST['numero_casa'];
$cidade = $_POST['cidade'];
$rep_legal = $_POST['rep_legal'];
$cpf_rl = $_POST['cpf_rl'];
$dia_vencimento = $_POST['dia_vencimento'];
$primeira_parcela = $_POST['primeira_parcela'];
$valor_insc = $_POST['valor_insc'];
$forma_pgto_insc = $_POST['forma_pgto_insc'];
$num_parcelas = $_POST['num_parcelas'];
$valor_parcelas = $_POST['valor_parcelas'];
$forma_pgto_parc = $_POST['forma_pgto_parc'];
$valor_md = $_POST['valor_md'];
$forma_pgto_md = $_POST['forma_pgto_md'];
$email_cliente = $_POST['email_cliente'];

	if($rep_legal == null){
		$rep_legal = "-----";
	}

	if($cpf_rl == null){
		$cpf_rl = "-----";
	}

$insere = "insert into tratar_dados (nome, cpf, rua, numero_casa, cidade, rep_legal, cpf_rl, dia_vencimento, primeira_parcela, valor_insc, forma_pgto_insc, num_parcelas, valor_parcelas, forma_pgto_parc, valor_md, forma_pgto_md, email_cliente) values ('".$nome."', '".$cpf."', '".$rua."','".$numero_casa."', '".$cidade."', '".$rep_legal."', '".$cpf_rl."', '".$dia_vencimento."', '".$primeira_parcela."', '".$valor_insc."', '".$forma_pgto_insc."', '".$num_parcelas."', '".$valor_parcelas."', '".$forma_pgto_parc."', '".$valor_md."', '".$forma_pgto_md."', '".$email_cliente."')";

$executa = mysqli_query($conexao, $insere);

?>

</head>
<body>

	<h1>Formulário Preenchido</h1>

	

<div class="row" style="margin-left: 1%;">
<form action="contrato.php" target="_blank" method="post">

<a href="editar.php"><button type="button" class="w3-button w3-orange">Editar <span class="glyphicon glyphicon-pencil"></span></button></a>

<button type="button" class="w3-button w3-light-green" data-toggle="modal" data-target="#confirmacao">
	Confirmar Inscrição <span class='glyphicon glyphicon-check'></span></button>


  
  <div class="modal fade" id="confirmacao" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Status da Matrícula.</h4>
        </div>
        <div class="modal-body">
          <p>Matrícula realizada com sucesso!</p>
        </div>
        <div class="modal-footer">
        	<button type="submit" class="btn btn-default" name="imprimir">Imprimir</button>
        	
        	<button type="button" class="btn btn-default" name="fechar"><a href="confirma_inscricao.php">Finalizar e fechar</a></button>
        	
        </div>
      </div>
    </div>
  </div>


</form>

</div>




</script>

</body>
</html>