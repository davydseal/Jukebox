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
<td><a href="excluir_livro.php">Excluir livro</a></td>
</tr>
</table>

<?php
}
?>
</BODY>
</HTML>
