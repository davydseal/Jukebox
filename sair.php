<?php session_start();?>
<?php


     $system_control = $_SESSION["system_control"];

     $nickname = $_SESSION["nickname"];


     //Manuten��o da Sess�o

       require("ligar.php");


     



     //Finalizando a sessao

     session_destroy(); //Logout

     //Fornecendo uma mensagem para o usu�rio

?>
     <script language='JavaScript'>
            
             document.location.href="index.html";
     </script>

     <?


     ?>
