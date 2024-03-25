<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>exercicio23</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
    <div id="container">
    <form action=exercicio23.php method="post">
            Digite uma frase:<input type="text" name="texto"/><br>
            Digite uma palavra velha:<input type="text" name="texto2"/><br>
            Digite uma palavra nova:<input type="text" name="texto3"/><br>
            <input type="submit" value="Exibir"/>
            </form>
            <?php
                 if(!empty($_POST["texto"]) && !empty($_POST["texto2"]) && !empty($_POST["texto3"])){
                     $sFrase= $_POST["texto"];
                     $PalavraV= $_POST["texto2"];
                     $PalavraN= $_POST["texto3"];
                     echo "<br><br>";
                     echo str_replace($PalavraV,$PalavraN,$sFrase);
                 }
            ?>
    </div>
    </body>
</html>