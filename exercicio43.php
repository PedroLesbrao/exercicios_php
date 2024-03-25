
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
            $iMatr1 = array(array(12,45,33),array(7,89,5));
            $iMatr2 = array(array(5,75,17),array(3,8,57));
            $iqltdLinhas = count($iMatr1);
            $iqltdColunas = max(array_map('count',$iMatr1));
            $aiSoma = array();
            for($i=0;$i<$iqltdLinhas;$i++){
                for($j=0;$j<$iqltdColunas;$j++){
                    $aiSoma[$i][$j]=$iMatr1[$i][$j]+$iMatr2[$i][$j];
                }
            }

            echo "<pre>";
            echo "Matriz 1";
            print_r($iMatr1);
            echo "<br>";
            echo "matriz 2";
            print_r($iMatr2);
            echo "matriz soma";
            print_r($aiSoma);
            echo "</pre>";
            
            ?>
        </div>
    </body>
</html>