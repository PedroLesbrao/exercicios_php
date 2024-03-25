
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
                echo "Utilizando foreach";
                /* foreach é um laço de repetição especializada na
                iteração de arrays
                foreach(arra)*/
                $asCores = array("Azul","Amarelo","Verde","vermelho","Preto");
                foreach($asCores as $cor){
                    echo "$cor<br>";
                }
            ?>
        </div>
    </body>
</html>