<!DOCTYPE html>
<html>
<head>

<?php
	include 'bootstrap.php';
	include 'conexao.php';

	$busca = "select * from tratar_dados";

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
	$valor_insc = $result['valor_insc'];
	$forma_pgto_insc = $result['forma_pgto_insc'];
	$num_parcelas = $result['num_parcelas'];
	$forma_pgto_parc = $result['forma_pgto_parc'];
	$valor_md = $result['valor_md'];
	$forma_pgto_md = $result['forma_pgto_md'];
	$email_cliente = $result['email_cliente'];
}

?>
	<title>Contrato</title>
</head>
<body>


	<style type="text/css">
		.caixa{
			margin-left: 1%;
			margin-right: 1%;
			margin-top: 2%;
			margin-bottom: 2%;
			text-align: justify;
		}
		.fonte{
			font-size: 75%;
		}
	</style>

<div class="container col-xs-12 caixa">

<div class="panel panel-default">
  <div class="panel-heading" align="center"><img src="header.png" width="40%"></div>
  <div class="panel-body fonte">
  <b>Eu:</b> <?php echo$nome ?>, <b>CPF:</b> <?php echo$cpf ?>, <b>Residente na Rua:</b> <?php echo$rua ?>, <b>Nº:</b> <?php echo$numero_casa ?>, cidade: <?php echo$cidade ?>, por  meu <b>representante legal: </b><?php echo$rep_legal ?>, brasileiro(a), <b>CPF:</b> <?php echo$cpf_rl ?> , DECLARO, sob pena de lei que tenho pleno conhecimento e estou de acordo com as condições estabelecidas pelo Foco Cursos Preparatórios, relativamente a matrícula, material e mensalidade, pertinentes ao ano 2017, a saber: <br>

<b>1.</b> Após realizar a matrícula no curso programado pelo Foco Cursos Preparatórios, com o pagamento da inscrição, o cancelamento do respectivo curso poderá ser realizado, mediante as seguintes condições: <br>

a) O valor referente à matrícula e material não será objeto de devolução.<br>
b) Declaro meu interesse em cursar o Preparatório para o Concurso da Brigada Militar.<br>

<b>No caso de desistência antes do término do mesmo:<br>

2. PAGAREI O VALOR TOTAL DO CURSO O QUAL SE DESTINARÁ AO RESSARCIMENTO DAS DESPESAS RELATIVAS A RESERVA DA VAGA QUE NÃO PÔDE SER DISPONIBILIZADA PARA OUTRO ALUNO.</b><br>

<b>2.1.</b> O não comparecimento do aluno nas aulas hora contratadas, não o exime do pagamento, tendo em vista, a disponibilidade do serviço colocado à sua disposição. <br>

<b>2.2.</b> Para efetivar a desistência do Curso, ora contratado, o(a) CONTRATANTE deverá formalizar sua solicitação, comunicando  na Secretaria, até 30 dias antes da data de vencimento da parcela vincenda, a fim de que seja procedido o cancelamento das parcelas futuras.<br>

<b>Do pagamento:</b><br>
<b>3. Os pagamentos deverão ser realizados até o dia: <?php echo$dia_vencimento ?> de cada mês, sendo a 1ª parcela no mês de: <?php echo$primeira_parcela ?>.</b> Após, serão cobrados 3% de multa + 0,03% de juro por dia de atraso. <br>

<b>3.1.</b> Inscrição: R$<?php echo$valor_insc ?>. <?php echo$forma_pgto_insc ?><br>

<b>3.2.</b> Os pagamentos referente ao curso, de acordo com a letra b do Item 1, deverão ser realizados em <?php echo$num_parcelas ?> vezes de R$<?php echo$valor_parcelas ?>. Forma de pagamento: <?php echo$forma_pgto_parc ?>.<br>

<b>3.3.</b> Material Didático: R$<?php echo$valor_md ?>. Forma de pagamento: <?php echo$forma_pgto_md ?>3.2.<br>

<b>4. As turmas somente funcionarão com um número mínimo de alunos, determinado pela Direção do curso.<br>

5.Disciplina.</b> <br>
<b>5.1</b> Em caso de indisciplina, o aluno poderá receber até duas advertências da direção do Foco Cursos Preparatórios Ltda. Em caso da necessidade da terceira advertência, o fato será comunicado ao responsável pelo aluno (menor de 18 anos). Ocorrendo a quarta advertência, será rescindido o presente contrato de prestação de serviços, sujeitando-se o aluno ao previsto no item 1, acima, relativamente a devolução de valores. <br>
     <b>5.2</b> O aluno, ou seu responsável, em caso de menoridade daquele, será responsabilizado pelo ressarcimento dos custos, de qualquer dano que o aluno venha causar ao patrimônio físico do Foco Cursos Preparatórios.<br> 
     <b>5.3</b> O responsável pelo aluno, que desejar obter informações sobre a situação do mesmo, tais como freqüência, etc., poderá obtê-las junto a secretaria do curso.   <br>

 <b>6.</b> É de inteira responsabilidade do Foco Cursos Preparatórios o planejamento e desenvolvimento dos conteúdos a serem trabalhados, bem como o que se refere à horários e alterações dos mesmos, fixação de carga horária, designação de professores, orientação didático-pedagógicas e educacional, e todas as demais providenciais que as atividades exigirem, voltados á preparação aos exames vestibulares e/ou concursos públicos, inclusive quanto a escolha das salas onde serão ministradas as aulas.<br>

   <b>7.</b> Cessão do Direito autoral e de Imagem <br>
     Desde já, autorizo por tempo indeterminado o Foco Cursos Preparatórios, sem qualquer custo ou ônus, a proceder  exploração comercial ou não, da minha imagem, nome e voz, bem como o curso e instituição em que for aprovado, podendo ser veiculados em qualquer meio de divulgação, tais como vídeo, fotográfica, sonora, em mídia que julgar conveniente, como jornais, revistas, televisão, rádios, folders, peças promocionais, internet, etc, sem qualquer limite ao número de exemplares, edições, aparições, tempo de exposição, etc. <br>

   <b>8.</b> O CONTRATADO obriga-se a repor aulas que não forem ministradas em razão de caso fortuito ou força maior, em dia e hora a serem por ele definido.<br><br>

<center>Itaqui-RS,____de_______________de 2017.<br><br>

Assinatura do aluno ou responsável _____________________________<br><br>

CONTATO: Aluno (    )___________       Responsável (   ) ______________      <br><br>E-MAIL: <?php echo$email_cliente ?></center>

</div>
</div>
</div>

</body>
</html> 