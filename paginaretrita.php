<?php
    session_start();
    if(isset($_SESSION['logado'])){


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
                echo "sessao em php<br><br>";
                echo "usuario logado!!!!";
                echo "acesso premitido!!!!";
                echo "<a href='javascript:window.history.go(-1);'>
                    valta para a pagina anterior</a>;";
                    echo "<br><br>";
                    echo "<a href = 'logout.php'>logout do sistema</a>";
            ?>
        </div>
    </body>
</html>
<?php
    }else{
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
    <?php
                echo "sessao em php<br><br>";
                echo "usuario nao logado!!!!";
                echo "acesso nao premitido!!!!";
                echo "<br><br>";
                echo "<a href = 'index.php'>logout do sistema</a>";
            ?>
    </body>
</html>