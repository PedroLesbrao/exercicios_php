
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
                $aiNum = array();
                for($i=0;$i<100;$i++){
                    $aiNum[]  = random_int(1,1000);
                }
                echo "<pre>";
                    print_r($aiNum);
                echo "</pre>";
                rsort($aiNum);
                echo "<pre>";
                    print_r($aiNum);
                echo "</pre>";
                echo "O segundo  maior núumro é $aiNum[1]";
            ?>
        </div>
    </body>
</html>