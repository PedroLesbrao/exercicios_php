<?php
    include './conexao.php';
    session_start();
    unset($_SESSION["id"]);
    unset($_SESSION["name"]);
    unset($_SESSION["tipo"]);
    mysqli_close($conexao);
    header("Location:index.php");
?>