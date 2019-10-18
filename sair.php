<?php
    session_start();
    //Deslogando usuário, voltando para a Home.
    session_destroy();
    header('Location:index.php');

?>