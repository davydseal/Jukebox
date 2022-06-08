<?php session_start();?>
<?php


     $system_control = $_SESSION["system_control"];

     $nickname = $_SESSION["nickname"];


     //Manutenção da Sessão

       require("ligar.php");


     



     //Finalizando a sessao

     session_destroy(); //Logout

     //Fornecendo uma mensagem para o usuário

?>
     <script language='JavaScript'>
            
             document.location.href="index.html";
     </script>

     <?


     ?>
