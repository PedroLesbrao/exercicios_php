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
                for($i=0;$i<=10;$i++){
                    echo "{$Valor}*{$i}".($Valor*$i);
                }
            ?>
        </div>
    </body>
</html>