
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
            $aiValores = array(1,2,3,4,5);
            $lIguais=true;
            //verificar se todos são iguais
            for($i=1;$i<count($aiValores);$i++){
                if($aiValores[0]!=$aiValores[$i]){
                    $lIguais=false;
                    break;
                }
            }
            //Se não forem iguais
            if(!$lIguais){
                $lTemRepetido=false;
                //verifica se tem repetidos
                for($i=0;$i<count($aiValores);$i++){
                    for($j=1;$j<count($aiValores);$j++){
                        //i e j devem ser diferentes para não
                        //pesquisar o mesmo número
                        if($aiValores[$i]==$aiValores[$j] && $i!=$j){
                            $lTemRepetido=true;
                        }
                    }
                }
            }

            echo "<pre>";
                print_r($aiValores);
            echo "</pre>";
            if($lIguais){
                echo "<br> Todos os valores são IGUAIS<br>";
            }else if($lTemRepetido){
                echo "<br> Tem valores REPETIDOS<br>";
            }else{
                echo "<br> Todos os valores são DIFERENTES";
            }
            ?>
        </div>
    </body>
</html>