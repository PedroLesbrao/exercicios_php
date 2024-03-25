
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>Exercicios</h1>
        <div id="container">
            <?php
                $aiPares = array();
                //Contar a quantidades de pares
                $iContador = 1;
                //numeros para verificar se é par
                $iNumero = 0;
                while($iContador<=100){
                    if($iNumero%2==0){
                        $aiPares[]=$iNumero;
                        $iContador++;
                    }
                    $iNumero++;
                }
                echo "<pre>";
                print_r($aiPares);
                echo "</pre>";
            ?>
        </div>
    </body>
</html>