
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
                $Num =$_POST["num"];

                if($Num ==2){
                    echo "É classificado como Isósceles";
                }else if($Num ==3){
                    echo "É classificado como  Escaleno";
                }else{
                    echo "Não pode ser classificado";
                }
            ?>
        </div>
    </body>
</html>