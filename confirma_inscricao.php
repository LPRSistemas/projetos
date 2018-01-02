<?php
	
	include 'conexao.php';

$busca = 'select * from tratar_dados';

$query = mysqli_query($conexao, $busca);

while($result = mysqli_fetch_array($query)){
	$id = $result['id'];
	$nome = $result['nome'];
	$cpf = $result['cpf'];
	$rua = $result['rua'];
	$numero_casa = $result['numero_casa'];
	$cidade = $result['cidade'];
	$rep_legal = $result['rep_legal'];
	$cpf_rl = $result['cpf_rl'];
	$dia_vencimento = $result['dia_vencimento'];
	$primeira_parcela = $result['primeira_parcela'];
	$valor_parcelas = $result['valor_parcelas'];
	$valor_insc = $result['valor_insc'];
	$forma_pgto_insc = $result['forma_pgto_insc'];
	$num_parcelas = $result['num_parcelas'];
	$forma_pgto_parc = $result['forma_pgto_parc'];
	$valor_md = $result['valor_md'];
	$forma_pgto_md = $result['forma_pgto_md'];
	$email_cliente = $result['email_cliente'];
}

$insere = "insert into alunos (nome, cpf, rua, numero_casa, cidade, rep_legal, cpf_rl, dia_vencimento, primeira_parcela, valor_insc, forma_pgto_insc, num_parcelas, valor_parcelas, forma_pgto_parc, valor_md, forma_pgto_md, email_cliente) values ('".$nome."', '".$cpf."', '".$rua."','".$numero_casa."', '".$cidade."', '".$rep_legal."', '".$cpf_rl."', '".$dia_vencimento."', '".$primeira_parcela."', '".$valor_insc."', '".$forma_pgto_insc."', '".$num_parcelas."', '".$valor_parcelas."', '".$forma_pgto_parc."', '".$valor_md."', '".$forma_pgto_md."', '".$email_cliente."')";

$executa = mysqli_query($conexao, $insere);

$apagar = 'delete from tratar_dados where id>=1';
$exe = mysqli_query($conexao, $apagar);

header("location: form.php");

?>