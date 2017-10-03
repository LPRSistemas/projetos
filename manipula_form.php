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

/*$insere = "insert into formulario(nome, cpf, rua, numero_casa, cidade, rep_legal, cpf_rl, dia_vencimento, primeira_parcela,
valor_insc, forma_pgto_insc, num_parcelas, valor_parcelas, forma_pgto_parc, valor_md, forma_pgto_md, email_cliente) values

('".$nome."','".$cpf."','".$rua."','".$numero_casa."','".$cidade."','".$rep_legal."','".$cpf_rl."','".$dia_vencimento."',
'".$primeira_parcela."','".$valor_insc."','".$forma_pgto_insc."','".$num_parcelas."','".$valor_parcelas."','".$forma_pgto_parc."',
'".$valor_md."','".$forma_pgto_md."','".$email_cliente."',)";

if(mysqli_query($conexao, $insere)){
	echo "cadastrado";
}else{
	echo "erro";
}

$executa = mysqli_query($conexao, $insere);*/

/*$insere = "insert into formulario(nome, cpf, rua, numero_casa, cidade, rep_legal, cpf_rl, dia_vencimento, primeira_parcela, valor_insc, forma_pgto_insc, num_parcelas, valor_parcelas, forma_pgto_parc, valor_md, forma_pgto_md, email_cliente) values 
('".$nome."','".$cpf."','".$rua."','".$numero_casa."','".$cidade."','".$rep_legal."','".$cpf_rl."','".$dia_vencimento."','".$primeira_parcela."','".$valor_insc."','".$forma_pgto_insc."','".$num_parcelas."','".$valor_parcelas."','".$forma_pgto_parc."','".$valor_md."','".$forma_pgto_md."','".$email_cliente."',)";

$teste = mysqli_query($conexao, $insere);*/

echo("Nome: ".$nome."<br>".
	"cpf: ".$cpf."<br>".
	"rua: ".$rua."<br>".
	"numero Casa: ".$numero_casa."<br>".
	"cidade: ".$cidade."<br>".
	"rep_legal: ".$rep_legal."<br>".
	"cpf_rl: ".$cpf_rl."<br>".
	"dia_vencimento: ".$dia_vencimento."<br>".
	"primeira_parcela: ".$primeira_parcela."<br>".
	"valor_insc: ".$valor_insc."<br>".
	"forma_pgto_insc: ".$forma_pgto_insc."<br>".
	"num_parcelas: ".$num_parcelas."<br>".
	"valor_parcelas: ".$valor_parcelas."<br>".
	"forma_pgto_parc: ".$forma_pgto_parc."<br>".
	"valor_md: ".$valor_md."<br>".
	"forma_pgto_md: ".$forma_pgto_md."<br>".
	"email_cliente: ".$email_cliente."<br>");

?>