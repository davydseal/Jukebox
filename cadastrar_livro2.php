<?php

  include("ligar.php");
  session_start();
$id = $_SESSION["id"];
$c_nome = $_POST["c_nome"];
$c_categoria = $_POST["c_categoria"];
$c_codigo = $_POST["c_codigo"];
$c_autor = $_POST["c_autor"];
$c_ebook = $_POST["c_ebook"];
$c_tamanho = $_POST["c_tamanho"];
$c_peso = $_POST["c_peso"];
$nickname = $_SESSION["nickname"];
$nome = $_SESSION["nome"];


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
                 

        




   

    $sql_code = "INSERT INTO livro (nome,categoria,codigo,autor,ebook,tamanho_do_arquivo,peso, pessoa, data_criacao,data_atualizacao) VALUES('$c_nome','$c_categoria','$c_codigo','$c_autor', '$c_ebook', '$c_tamanho', '$c_peso','$nome', '$data', '$data')";
    $resultado_update = mysqli_query($mysqli, $sql_code);

    if($resultado_update != 0)
    {
    ?>
    <script language="javascript">
    alert("Livro adicionada com sucesso!!!");
     document.location.href="usuario.php";
    </script>
    <?php
    }
    else
    {
    ?>
    <script language="javascript">
    alert("Houve erro contate o administrador!!");
    document.location.href="index.html";
    </script>
    <?php
    }

  

 

?>