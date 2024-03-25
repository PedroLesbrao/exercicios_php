
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>Exercicios</h1>
        <div id="container">
        <form action=exercicio34.php method="post">
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
                    $soma = $asValores[0];
                    for($i=1;$i<count($asValores);$i++){
                        $soma += $asValores[$i];
                    }
                    echo "A soma é $soma";
                }
                /*if(!empty($_POST["Numero"])){
                    $aiNumero = $_POST["numero"];
                    soma =0;
                    foreach ($aiNumero as $aiNum){
                        $soma+=$iNum;
                        echo "<pre>;
                        print_r("aiNumero);
                        echo "</pre> ;
                        echo "<br><BR> A soma dos outros números do vetor é $soma<br>
                        //utilizando a funcção do php qu soma um array
                        echo "<br> A soma do array é :.array_sum($aiNumero);
                    }*/
            ?>
        </div>
    </body>
</html>