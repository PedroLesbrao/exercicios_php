
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
            $aiValores = array();
            for($i=0;$i<150;$i++){
                $aiValores[]=rand(0,1000);
            }
            // $aInvertido = array();
            // $j=0;
            // for($i=149;$i>=0;$i--){
            //     $aInvertido[$i]=$aiValores[$j];
            //     $j++;
            // }
            $aInvertido = array();
            $j = 0;
            for($i=149;$i>=0;$i--){
                $aInvertido[$i]=$aiValores[$j];
                $j++;
            }

//$aInvertido = array_reverse($aiValores);
            echo "<pre>";
            print_r($aiValores);
            echo "<br>";
            print_r($aInvertido);
            echo "</pre>";
            
            ?>
        </div>
    </body>
</html>