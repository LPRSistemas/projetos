<?php
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

$insere = "insert into formulario (nome, cpf, rua, numero_casa, cidade, rep_legal, cpf_rl, dia_vencimento, primeira_parcela, valor_insc, forma_pgto_insc, num_parcelas, valor_parcelas, forma_pgto_parc, valor_md, forma_pgto_md, email_cliente) values ('".$nome."', '".$cpf."', '".$rua."','".$numero_casa."', '".$cidade."', '".$rep_legal."', '".$cpf_rl."', '".$dia_vencimento."', '".$primeira_parcela."', '".$valor_insc."', '".$forma_pgto_insc."', '".$num_parcelas."', '".$valor_parcelas."', '".$forma_pgto_parc."', '".$valor_md."', '".$forma_pgto_md."', '".$email_cliente."')";

$executa = mysqli_query($conexao, $insere);

?>