
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
        <form action=exercicio29.php method="post">
            Digite seu nome:<input type="text" name="texto"/><br>
            <input type="submit" value="Exibir"/>
            </form>
            <?php
                if(!empty($_POST["texto"])){
                    $sTexto = $_POST["texto"];
                echo strrev(strtoupper($sTexto));
                echo "<br><br>";
                }
            ?>
        </div>
    </body>
</html>