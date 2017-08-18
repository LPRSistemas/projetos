<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Formul&aacute;rio de Contato</title>
<style type="text/css">

.texto {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}

</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="confirmacao_email.php">
  <table width="600" border="0" cellspacing="0" cellpadding="20">
    <tr>
      <td width="161" class="texto">Nome</td>
      <td width="359"><label>
        <input name="nome" type="text" class="texto" id="nome" size="40" />
      </label></td>
    </tr>
    <tr>
      <td class="texto">Email</td>
      <td><input name="email" type="text" class="texto" id="email" size="40" /></td>
    </tr>
    <tr>
      <td class="texto">Assunto</td>
      <td><input name="assunto" type="text" class="texto" id="assunto" size="40" /></td>
    </tr>
    <tr>
      <td valign="top" class="texto">Mensagem</td>
      <td><label>
        <textarea name="mensagem" cols="45" rows="5" class="texto" id="mensagem"></textarea>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input name="enviar" type="submit" class="texto" id="enviar" value="Enviar" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>