<!DOCTYPE html>
<html>
<head>
<?php
	include 'header.php';
?>
	<title>SERVIÇOS</title>
</head>
<body>

<div style="margin-top: 1%;" class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

<form class="w3-container w3-card-4" action="/action_page.php">
  <h2 class="w3-text-gray">Entrada de Serviços</h2><br>
  

  <p>
  <label class="w3-text-gray"><b>Recebido por:</b></label>
  <select class="w3-select w3-border" name="recebido">
    <option value="" disabled selected>- Selecione -</option>
    <option value="1">Gabriel</option>
    <option value="2">Jacsson</option>
    <option value="3">Andrei</option>
  </select></p>

  <p>
  <label class="w3-text-gray"><b>Categoria:</b></label>
  <select class="w3-select w3-border" name="categoria">
    <option value="" disabled selected>- Selecione -</option>
    <option value="1">Desktop</option>
    <option value="2">NoteBook</option>
    <option value="3">SmartPhone</option>
  </select></p>

  <p>      
  <label class="w3-text-gray"><b>Nome do cliente:</b></label>
  <input class="w3-input w3-border" name="cliente" type="text"></p>

  <p>      
  <label class="w3-text-gray"><b>Endereço para entrega:</b></label>
  <input class="w3-input w3-border" name="entrega" type="text"></p>

  <p>      
  <label class="w3-text-gray"><b>Contato:</b></label>
  <input class="w3-input w3-border" name="contato" type="text"></p> 
  
  <p><label class="w3-text-gray">Serviço a realizar:</label>
  <textarea class="form-control w3-input w3-border" name="comment" rows="5"></textarea>
  </p>

  <p>      
  <label class="w3-text-gray"><b>Valor a ser cobrado:</b></label>
  <input class="w3-input w3-border" name="preco" type="text"></p>

  <p>
  <label class="w3-text-gray"><b>Urgência:</b></label>
  <select class="w3-select w3-border" name="categoria">
    <option value="" disabled selected>- Selecione -</option>
    <option value="1">Baixa</option>
    <option value="2">Média</option>
    <option value="3">Alta</option>
  </select></p>

  <button style="margin-top: 1%;" class="w3-btn w3-gray">Registrar</button></p>
</form>
</div>

</body>
</html>