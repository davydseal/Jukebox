<?php session_start();?>
<HTML>
<HEAD>
 <TITLE>Jukebox</TITLE>
   <?php

$status = $_SESSION["status"];
$system_control = $_SESSION["system_control"];


if(($system_control != 1) || ($status != 1))
{
?>
<script language="javascript">
alert("Acesso Negado!!");
document.location.href="index.php";
</script>
<?php
}
else
{

   $cod_login = $_SESSION["cod_login"];
$nickname = $_SESSION["nickname"];

  require("ligar.php");





?>

<?php
error_reporting(0);
?>
</HEAD>
<BODY>

<?php



$consulta_no = "SELECT * FROM $table_pessoa WHERE id=$cod_login";
$resultado_no = mysqli_query($mysqli, $consulta_no);
$vetor = mysqli_fetch_array($resultado_no);

?>
Bem vindo <?php print($vetor['nome']); ?>, <a href="sair.php">Sair</a>
<BR><BR><BR>


<table align="center" cellpadding="10">
<tr>
<td><a href="cadastrar_livro.php">Cadastrar livro</a></td>
<td><a href="consultar_livro.php">Procurar livro</a></td>
<td><a href="editar_livro.php">Editar livro</a></td>
<td><a href="">Excluir livro</a></td>
</tr>
</table>
<BR><BR><BR>
<form method="post" action="cadastrar_livro2.php">
<table border="0" align="center">
<tr>
  <td>Nome:</td>
  <td><input type="text" name="c_nome" size="20"></td>
</tr>
<tr>
  <td>Categoria:</td>
  <td><input type="text" name="c_categoria" size="20"></td>
</tr>
<tr>
  <td>Codigo:</td>
  <td><input type="text" name="c_codigo" size="20"></td>
</tr>
<tr>
  <td>Autor:</td>
  <td><input type="text" name="c_autor" size="20"></td>
</tr>
<tr>
  <td>Ebook:</td>
  <td> <select class="" name="c_ebook">

      <option value="1">Sim</option>
      <option value="2">Não</option>
 
                                                                            </select></td>
</tr>
<tr>
  <td>Tamanho do arquivo:</td>
  <td><input type="text" name="c_tamanho" size="20"></td>
</tr>
<tr>
  <td>Peso:</td>
  <td><input type="text" name="c_peso" size="20"></td>
</tr>

</table>
<BR>
<table align="center">
<tr>
<td><input type="submit" class="button" name="botao" value="Cadastrar" /></td>
</tr>
</table>
</form>
<?php
}
?>
</BODY>
</HTML>
