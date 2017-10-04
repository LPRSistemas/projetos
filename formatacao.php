<html>
<head>
<title>Formatar Dados</title>

</style>
<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>
</head>
<body>
<table width="301" height="160" border="0" cellspacing="0">
  <tr>
    <td width="32" height="24">Data:</td>
    <td width="265"><input type="text" name="data" maxlength="10" OnKeyPress="formatar('##/##/####', this)" ></td>
  </tr>
  <tr>
    <td height="24">Telefone:</td>
    <td><input type="text" name="tel" maxlength="13" OnKeyPress="formatar('##-####-####', this)" ></td>
  </tr>
  <tr>
    <td height="24">Celular:</td>
    <td><input type="text" name="cel" maxlength="13" OnKeyPress="formatar('##-#####-####', this)" ></td>
  </tr>
  <tr>
    <td height="24">Cep:</td>
    <td><input type="text" name="cep" maxlength="9" OnKeyPress="formatar('#####-###', this)" ></td>
  </tr>
  <tr>
    <td height="24">CPF:</td>
    <td><input type="text" name="cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" ></td>
  </tr>
  <tr>
    <td height="24">Hora:</td>
    <td><input type="text" name="hora" maxlength="5" OnKeyPress="formatar('##:##', this)" ></td>
  </tr>
</table>
</body>
</html>