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

<div class="form-group">
Representante Legal: <input type="text" name="rep_legal" class="form-control">
CPF do Representante Legal: <input type="text" maxlength="14" name="cpf_rl" class="form-control" OnKeyPress="formatar('###.###.###-##', this)">
</div>

<div class="form-group">
Dia do vencimento: <input type="text" name="dia_vencimento" class="form-control" maxlength="10">
Primeira parcela: <input type="text" name="primeira_parcela" class="form-control" maxlength="10">
Valor da inscrição: <input type="text" name="valor_insc" class="form-control">
</div>

<div class="form-group">
Formade pagamento: <input type="text" name="forma_pgto_insc" class="form-control">
Número de parcelas: <input type="number" name="num_parcelas" class="form-control">
Valor das parcelas: <input type="text" name="valor_parcelas" class="form-control">
</div>

<div class="form-group">
Forma de pagamento: <input type="text" name="forma_pgto_parc" class="form-control">
Valor do material didático: <input type="text" name="valor_md" class="form-control">
Forma de pagamento: <input type="text" name="forma_pgto_md" class="form-control">
Email do cliente: <input type="text" name="email_cliente" class="form-control">
</div>

<input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-primary">
<input type="reset" name="limpar" value="Limpar formulário" class="btn btn-primary">
<br><br>

</div>


</form>

</body>
</html>