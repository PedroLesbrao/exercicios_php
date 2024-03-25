<?php
    //iniciando sassao
    session_start();
    if(!empty($_POST["user"]) && !empty($_POST["password"])){

    
?>
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
            <?php
                $user  = $_POST['user'];
                $senha = $_POST['password'];
                if($user=='adm' && $senha=='1234'){
                    //definindo valor para"logado"
                $_SESSION['logado']=TRUE;
                echo "usuario logado com sucesso!!!<br>acesso permitido!!!<br><br>";
                echo "<a href='paginarestrita.php'>Entrar na pagina restrita</a>";
                echo "<br><br>";
                echo "<a href='homepage.php'>ir para o rome page</a>";

                }else{
                    echo "<p class='falha'>FALHA AO LOGAR NO SISTEMA!!!<br>
                    ACESSO NÃO PERMITUDO!!!</p><br><br>";
                    echo"<a href='index.php'> login do sistema</a>";
                }
            ?>
        </div>
    </body>
</html>
<?php
    }else{
?>


<?php
    }
?>