<?php
  include("ligar.php");
 session_start();
$system_control = $_SESSION["system_control"];
$c_nome = $_POST["c_nome"];
$c_categoria = $_POST["c_categoria"];
$c_codigo = $_POST["c_codigo"];
$c_autor = $_POST["c_autor"];
$c_ebook = $_POST["c_ebook"];
$c_tamanho = $_POST["c_tamanho"];
$c_peso = $_POST["c_peso"];
$nickname = $_SESSION["nickname"];
$nome = $_SESSION["nome"];
$id_livro = $_POST["id_livro"];


date_default_timezone_set('America/Sao_paulo');
$data = date("d/m/Y");





           if($c_nome == '')
                {
                ?>
                   <script language="javascript">
                        alert("Preencha o campo Nome");
             history.go(-1)
                        </script>
                <?php
                }
                else if($c_categoria == '')
                {
                ?>
                   <script language="javascript">
                        alert("Preencha o campo Categoria");
           history.go(-1)
                        </script>
                <?php
                }
                else if($c_codigo == '')
                {
                ?>
                   <script language="javascript">
                        alert("Preencha o campo Codigo");
                history.go(-1)
                        </script>
                <?php
                }


 else if($c_autor == '')
                {
                ?>
                   <script language="javascript">
                        alert("Preencha o campo Autor");
                history.go(-1)
                        </script>
                <?php
                }
         
        else
        {
        
        require("ligar.php");
        
        $update = "UPDATE $table_livro SET nome='$c_nome', categoria='$c_categoria', codigo='$c_codigo', autor='$c_autor', ebook=$c_ebook, tamanho_do_arquivo='$c_tamanho', peso='$c_peso', data_atualizacao='$data' WHERE id=$id_livro";
        $x = mysqli_query($mysqli,$update);

        
        if($x =! 0)
        {
        ?>
         <script language="javascript">
        alert("Livro editado com sucesso!!!");
        document.location.href="editar_livro.php";
        </script>
        <?php
        }
        else
        {
        ?>
         <script language="javascript">
        alert("Houve um Erro Contate o Administrador");
        document.location.href="index.html";
        </script>
        <?php
        }
        
        }


?>
