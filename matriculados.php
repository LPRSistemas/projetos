<!DOCTYPE html>
<html>
<head>
	<?php
		include 'bootstrap.php';
	?>
	<title>Alunos Matriculados</title>
</head>

	<style type="text/css">
		

	</style>

<body>

	<div class="w3-container">
  <h2>Alunos Matriculados</h2>

  <input class="w3-input w3-border w3-padding" type="text" placeholder="Procurar nomes..." id="myInput" onkeyup="myFunction()">

  <table class="w3-table-all w3-margin-top" id="myTable">

    <tr>
      <th style="width:60%;">Nome</th>
      <th style="width:40%;">Curso</th>
    </tr>

<?php
	include 'conexao.php';

	$busca = "select * from alunos";
	$query = mysqli_query($conexao, $busca);

	while($result = mysqli_fetch_array($query)){
	$id = $result['id_inscricao'];
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
	$curso = $result['curso'];
	$email_cliente = $result['email_cliente'];

echo("
	<tr>
      <td>".$nome."</td>
      <td>".$curso."</td>
    </tr>"
);
}

?>
    
  </table>

 
</div>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

</body>
</html>