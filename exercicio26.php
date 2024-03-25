
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>Exercicio 26</h1>
        <div id="container">
        <form action=exercicio26.php method="post">
            Digite uma frase:<input type="text" name="texto"/><br>
            <input type="submit" value="Exibir"/>
            </form>
            <?php
                if(!empty($_POST["texto"])){
                    $sTexto = $_POST["texto"];
                    $sFrase = str_replace(" ","#",$sTexto);
                    echo $sFrase;
                }
            ?>
        </div>
    </body>
</html>