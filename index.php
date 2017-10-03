<!DOCTYPE html>
<html>
<head>

<?php
include 'bootstrap.php';
?>

	<title>Inscrição concurso BM</title>
</head>
<body>

<h2>Formulário de inscrição concurso BM</h2>

<form method="post" action="manipula_form.php">

<div class="col-sm-6">

<div class="form-group">
Nome:<input type="text" name="nome" class="form-control">
CPF:<input type="text" name="cpf" class="form-control">
</div>

<div class="form-group">
Rua: <input type="text" name="rua" class="form-control">
Nº: <input type="text" name="numero_casa" class="form-control">
Cidade: <input type="text" name="cidade" class="form-control">
</div>

<div class="form-group">
Representante Legal: <input type="text" name="rep_legal" class="form-control">
CPF do Representante Legal: <input type="text" name="cpf_rl" class="form-control">
</div>

<div class="form-group">
Dia do vencimento: <input type="text" name="dia_vencimento" class="form-control">
Primeira parcela: <input type="text" name="primeira_parcela" class="form-control">
Valor da inscrição: <input type="text" name="valor_insc" class="form-control">
</div>

<div class="form-group">
Formade pagamento: <input type="text" name="forma_pgto_insc" class="form-control">
Número de parcelas: <input type="text" name="num_parcelas" class="form-control">
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