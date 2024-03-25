
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
            function ehPrimo($numero){
                $iConta=0;
                for($i=1;$i<=$numero;$i++){
                    if($numero%$i==0){
                        $iConta++;

                    }
                }
                if($iConta==2){
                    return true;
                }else{
                    return false;
                }
            }
            /*gmp_prob_prime(numero) esta função retorna 
            0 - não primo
            1 - provalvelmente primo
            2 - é primo*/
            $aiPrimos = array();
            $iNum= 0;
            $iContaPrimos =0;
            while($iContaPrimos<20){
                //if(gmp_prob_prime($iNum)==2){}
                if(ehPrimo($iNum)){
                    $aiPrimos[] = $iNum;
                    $iContaPrimos++;
                }
                $iNum++;
            }
            echo "<pre>";
                print_r($aiPrimos);
            echo "</pre>";
            ?>
        </div>
    </body>
</html>