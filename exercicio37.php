
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>Exercicios</h1>
        <div id="container">
        <form action=exercicio37.php method="post">
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
                    $Soma = $asValores[0];
                    $Media = $asValores[0];
                    for($i=1;$i<count($asValores);$i++){
                        $Soma  += $asValores[$i];
                        $Media = $Soma/10;
                    }
                    echo "<pre>";
                    print_r($asValores);
                    echo "</pre>";
                    echo "A soma é $Soma<br><br>";
                    echo "A media é igual á $Media";
                    //2a solução
                    $Media = array_sum($asValores)/count($asValores);
                    echo "<br> A media dos valores é $Media<br>";
                }
            ?>
        </div>
    </body>
</html>