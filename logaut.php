<?php
    session_start();
    //deletar a variave da sesao
    unsat($_SESSION['logado']);
    //finalizar a sessao
    session_destroy();
    sleep(2);
    header("location:index.php");
?>