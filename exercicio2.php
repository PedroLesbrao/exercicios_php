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
                $valor = $_POST["valor"];
                $Num    = 10;
                $Num1   = 5;
                $Num2   = 2;

                if($valor%$Num== 0 ){
                    echo "O número e divisivel por 10";
                }else if($valor%$Num1==0 ){
                    echo "O número e divisivel por 5";
                }else if($valor%$Num2==0 ){
                    echo "O número e divisivel por 2";
                }
                else{
                    echo "Não é divisivel";
                }
            ?>
        </div>
    </body>
</html>