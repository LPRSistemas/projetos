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
Formade pagamento:
<select class="w3-select w3-border" name="forma_pgto_insc">
  <option value="" disabled selected>Forma de pagamento da inscrição</option>
  <option value="Dinheiro">Dinheiro</option>
  <option value="Cartão">Cartão</option>
  <option value="Cheque">Cheque</option>
  <option value="Boleto">Boleto</option>
</select>
</div>

<p><b>Quanto às parcelas</b></p>
<div class="form-group w3-third">
Dia do vencimento: <input type="text" name="dia_vencimento" class="form-control" maxlength="10">
</div>
<div class="form-group w3-third">
Mês da primeira parcela:
<select class="w3-select w3-border" name="primeira_parcela">
  <option value="" disabled selected>Selecione o mês</option>
  <option value="Janeiro">Janeiro</option>
  <option value="Fevereiro">Fevereiro</option>
  <option value="Março">Março</option>
  <option value="Abril">Abril</option>
  <option value="Maio">Maio</option>
  <option value="Junho">Junho</option>
  <option value="Julho">Julho</option>
  <option value="Agosto">Agosto</option>
  <option value="Setembro">Setembro</option>
  <option value="Outubro">Outubro</option>
  <option value="Novembro">Novembro</option>
  <option value="Dezembro">Dezembro</option>
</select>
</div>
<div class="form-group w3-third">
Número de parcelas: <input type="number" name="num_parcelas" class="form-control">
</div>
<div class="form-group w3-half">
Valor das parcelas: <input type="text" name="valor_parcelas" class="form-control">
</div>
<div class="form-group w3-half">
Forma de pagamento:
<select class="w3-select w3-border" name="forma_pgto_parc">
  <option value="" disabled selected>Forma de pagamento das parcelas</option>
  <option value="Dinheiro">Dinheiro</option>
  <option value="Cartão">Cartão</option>
  <option value="Cheque">Cheque</option>
  <option value="Boleto">Boleto</option>
</select>
</div>
<div class="form-group w3-half">
Valor do material didático: <input type="text" name="valor_md" class="form-control">
</div>
<div class="form-group w3-half">
Forma de pagamento:
<select class="w3-select w3-border w3-rounded" name="forma_pgto_md">
  <option value="" disabled selected>Forma de pagamento do material</option>
  <option value="Dinheiro">Dinheiro</option>
  <option value="Cartão">Cartão</option>
  <option value="Cheque">Cheque</option>
  <option value="Boleto">Boleto</option>
</select>
</div>

<br><br><br><br>
<div class="form-group">
E-mail para contato:<input type="text" name="email_cliente" class="form-control">
</div>

<input type="submit" name="confirmar" value="Confirmar" class="btn btn-primary"></a>
<input type="reset" name="limpar" value="Limpar formulário" class="btn w3-red">
<a href="pagina_inicial.php"><input type="button" name="voltar" value="Página inicial" class="btn w3-green"></a>
<br><br>

</div>



</form>

</body>
</html>
