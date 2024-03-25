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
                $Valor =$_POST["valor"];
                $Valor1 =$_POST["valor1"];

                do{
                    echo "valor = $Valor<br>";
                    $Valor++;
                }while($Valor <= $Valor1);
            ?>
        </div>
    </body>
</html>