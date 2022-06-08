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
 <form action="consultar_pelo_id.php" method="post">
                        <center><input type="text" name="c_id" class="form-control search-type" placeholder="Pesquisar livro pelo id...">
            <input type="submit" name="botao" id="submit" value="Pesquisar"></center>
            </form>
<table align="center" cellpadding="5">
  <tr>
  <td>Id</td>
  <td>Nome</td>
  <td>Categoria</td>
  <td>Codigo</td>
  <td>Autor</td>
  <td>Ebook</td>
  <td>Tamanho do arquivo</td>
  <td>Peso</td>
  <td>Pessoa</td>
  <td>Data de criação</td>
  <td>Data de atualização</td>
  <td>Ação</td>
  </tr>

<?php
$c_id = $_POST['c_id'];
             require("ligar.php");
            $consulta3 = "SELECT * FROM $table_livro WHERE id LIKE '%$c_id%'";
            $resultado3 = mysqli_query($mysqli,$consulta3);
            $quantos_forum = mysqli_num_rows($resultado3);

              if($quantos_forum == 0)
 {
 ?>
 <script language="javascript">
alert("Id não encontrado!");
document.location.href="consultar_livro.php";
</script>
 <?php
 }

            ?>

                      <?php

            for($j=0;$j < $quantos_forum;$j++)
            {
            $variavel = mysqli_fetch_array($resultado3);


            ?>
<tr>
  <td><?php print($variavel['id']); ?></td>
<td><?php print($variavel['nome']); ?></td>
<td><?php print($variavel['categoria']); ?></td>
<td><?php print($variavel['codigo']); ?></td>
<td><?php print($variavel['autor']); ?></td>
<td>                     <?php
                                        if ($variavel[5]=='1'){

?>
                                       
                                           
                                                
                                       
  SIM

                                            <?php
                                        } elseif ($variavel[5]=='2') {
?>                                        
                                        NÃO
<?php                               }
?></td>
<td><?php print($variavel['tamanho_do_arquivo']); ?></td>
<td><?php print($variavel['peso']); ?></td>
<td><?php print($variavel['pessoa']); ?></td>
<td><?php print($variavel['data_criacao']); ?></td>
<td><?php print($variavel['data_atualizacao']); ?></td>
<td><a href="editar_livro2.php?codigo_news=<?php print($variavel['id']); ?>">Editar</a> / <a href="excluir_livro2.php?codigo_news=<?php print($variavel['id']); ?>">Excluir</a></td>
</tr>
 <?php
 }
 ?> 
</table>

<?php
}
?>
</BODY>
</HTML>
