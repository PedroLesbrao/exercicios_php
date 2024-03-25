
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
                function sorteia($iTotal){
                    $um     = 0;
                    $dois   = 0;
                    $tres   = 0;
                    $quatro = 0;
                    $cinco  = 0;
                    $seis   = 0;
                    for($i=1; $i<=$iTotal;$i++){
                        $iNum = random_int(1,6);
                        if($iNum==1){
                            $um++;
                        }else if($iNum==2){
                            $dois++;
                        }else if($iNum==3){
                            $tres++;
                        }else if($iNum==4){
                            $quatro++;
                        }else if($iNum==5){
                            $cinco++;
                        }else if($iNum==6){
                            $seis++;
                        }
                    }
                    echo "<br><br>Após $iTotal de sorteio, temos:<br>
                    valor 1: $um vezes<br>
                    valor 2: $dois vezes<br>
                    valor 3: $tres vezes<br>
                    valor 4: $quatro vezes<br>
                    valor 5: $cinco vezes<br>
                    valor 6: $seis vezes<br>";

                }
                sorteia(1000000);
            ?>
        </div>
    </body>
</html>