
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>Exercicios</h1>
        <div id="container">
        <form action=exercicio25.php method="post">
            Digite uma frase:<input type="text" name="texto"/><br>
            <input type="submit" value="Exibir"/>
            </form>
            <?php
                if(!empty($_POST["texto"])){
                    $sTexto = $_POST["texto"];
                    $iTamanho = str_word_count($sTexto);
                    echo "$sTexto tem $iTamanho palavras"; 
                }
            ?>
        </div>
    </body>
</html>