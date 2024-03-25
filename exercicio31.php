
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>Exercicios</h1>
        <div id="container">
        <form action=exercicio31.php method="post">
           <label>Digite o 1° valor:</label>
           <input type="number" name="valor[]"/><br>
           <label>Digite o 2° valor:</label>
           <input type="number" name="valor[]"/><br>
           <label>Digite o 3° valor:</label>
           <input type="number" name="valor[]"/><br>
           <label>Digite o 4° valor:</label>
           <input type="number" name="valor[]"/><br>
           <label>Digite o 5° valor:</label>
           <input type="number" name="valor[]"/><br>
           <label>Digite o 6° valor:</label>
           <input type="number" name="valor[]"/><br>
           <label>Digite o 7° valor:</label>
           <input type="number" name="valor[]"/><br>
           <label>Digite o 8° valor:</label>
           <input type="number" name="valor[]"/><br>
           <label>Digite o 9° valor:</label>
           <input type="number" name="valor[]"/><br>
           <label>Digite o 10° valor:</label>
           <input type="number" name="valor[]"/><br>
            <input type="submit" value="Exibir"/>
            </form>
            <?php
                if(!empty($_POST["valor"])){
                    $asValores = $_POST["valor"];
                    $maior = $asValores[0];
                    $iInd =0;
                    for($i=1;$i<count($asValores);$i++){
                        if($asValores[$i]>$maior){
                            $maior = $asValores[$i];
                            $iInd  = $i;
                        }
                    }
                    echo "<pre>";
                    print_r($asValores);
                    echo "</pre>";
                    echo "O maior numero do vetor é $maior e está na posição $iInd";
                }
            ?>
        </div>
    </body>
</html>