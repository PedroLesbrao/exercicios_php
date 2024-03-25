
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
                $aDados = array(array(),array());
                //0   1
                /*3   5
                  4   6
                  2   1*/
                  for($i=0;$i<100;$i++){
                    $aDados[$i][0] = rand(1,6);
                    $aDados[$i][1] = rand(1,6);
                  }
                  echo "<pre>";
                        print_r($aDados);
                  echo "</pre>";
                  echo "<br><br>";
                  for($i=0;$i<100;$i++){
                    echo ($i+1). "° lançamento Dado1:  ". 
                    $aDados[$i][0]."    - Dado2: ".$aDados[$i][1]."<br>";
                }
            ?>
        </div>
    </body>
</html>