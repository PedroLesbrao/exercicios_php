
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
        <form method="post" action="exercicio10.php">
                <label>Digite 1 ou 2 para converter para Celcius ou Fahrenheit:</label>
                <input type="number" name="valor" min="0" max="10000"><br>
                <input type="submit" value="ENVIAR">
            </form>
            <?php
                $Num=$_POST["valor"];
                
                if($Num==1){
                    echo "converter uma temperatura de grau Celsius para Farenheit".($Num);
                }else if($Num==2){
                    echo "converter uma temperatura de grau  Farenheit para Celsius".($Num);
                }else{
                    echo "Numero Invalido";
                }
                function converter($temperatura){
                    $resposta =($temperatura*9/5) + 32;
                    return $resposta;
                }
                function converter1($temperatura){
                    $resposta =($temperatura-32) * 5/9;
                    return $resposta;
                }
                echo "O resultado é $resposta";
            ?>
        </div>
    </body>
</html>