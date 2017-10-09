<!DOCTYPE html>
<html>
<head>

<?php
include 'bootstrap.php';
?>

	<title>Formulário de Matrícula</title>
</head>
<body>

<script type="text/javascript">
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
   
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>


<div style="margin-left: 10%; margin-right: 10%;">
<form method="post" action="pega_dados.php" class="w3-container w3-card-4 w3-light-grey w3-text-black w3-margin col-xs-12">

<div class="w3-row-padding">

<h2>Formulário de Matrícula</h2>


<p style="margin-top: 5%"><b>Dados de identificação</b></p>
<div class="form-group w3-half">
Nome:<input type="text" name="nome" class="form-control">
</div>
<div class="form-group w3-half">
CPF:<input type="text" name="cpf" maxlength="14" class="form-control" OnKeyPress="formatar('###.###.###-##', this)">
</div>

<p><b>Endereço</b></p>
<div class="form-group w3-third">
Rua: <input type="text" name="rua" class="form-control">
</div>
<div class="form-group w3-third">
Nº: <input type="number" name="numero_casa" class="form-control">
</div>
<div class="form-group w3-third">
Cidade: <input type="text" name="cidade" class="form-control">
</div>

<p><b>Dados de indentificação do representante legal</b></p>
<div class="form-group w3-half">
Representante Legal: <input type="text" name="rep_legal" class="form-control">
</div>
<div class="form-group w3-half">
CPF do Representante Legal: <input type="text" maxlength="14" name="cpf_rl" class="form-control" OnKeyPress="formatar('###.###.###-##', this)">
</div>

<p><b>Quanto à inscrição</b></p>
<div class="form-group w3-half">
Valor da inscrição: <input type="text" name="valor_insc" class="form-control">
</div>
<div class="form-group w3-half">
Formade pagamento: <input type="text" name="forma_pgto_insc" class="form-control">
</div>

<p><b>Quanto às parcelas</b></p>
<div class="form-group w3-third">
Dia do vencimento: <input type="text" name="dia_vencimento" class="form-control" maxlength="10">
</div>
<div class="form-group w3-third">
Primeira parcela: <input type="text" name="primeira_parcela" class="form-control" maxlength="10" OnKeyPress="formatar('##/##/###', this)">
</div>
<div class="form-group w3-third">
Número de parcelas: <input type="number" name="num_parcelas" class="form-control">
</div>
<div class="form-group w3-half">
Valor das parcelas: <input type="text" name="valor_parcelas" class="form-control">
</div>
<div class="form-group w3-half">
Forma de pagamento: <input type="text" name="forma_pgto_parc" class="form-control">
</div>
<div class="form-group w3-half">
Valor do material didático: <input type="text" name="valor_md" class="form-control">
</div>
<div class="form-group w3-half">
Forma de pagamento: <input type="text" name="forma_pgto_md" class="form-control">
</div>

<div class="form-group">
Email para contato: <input type="text" name="email_cliente" class="form-control">
</div>

<input type="submit" name="imprimir" value="Imprimir" class="btn btn-primary"></a>
<input type="submit" name="cadastrar" value="Cadastrar" class="btn w3-green">
<input type="reset" name="limpar" value="Limpar formulário" class="btn w3-red">
<br><br>

</div>


</form>

</body>
</html>

<?php

	if(isset($_POST['cadastrar'])){

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

echo "<script>window.location.replace(target-new:tab, 'pega_dados.php');</script>";;
		
	}

?>