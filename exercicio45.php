
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
        <form action="exercicio45.php" method="post">
        <label>Digite o 1° valor: </label>
        <input type="number" name="valor[]"/><br>
        <label>Digite o 2° valor: </label>
        <input type="number" name="valor[]"/><br>
        <label>Digite o 3° valor: </label>
        <input type="number" name="valor[]"/><br>
        <label>Digite o 4° valor: </label>
        <input type="number" name="valor[]"/><br>
        <label>Digite o 5° valor: </label>
        <input type="number" name="valor[]"/><br>
        <label>Digite o 6° valor: </label>
        <input type="number" name="valor[]"/><br>
        <label>Digite o 7° valor: </label>
        <input type="number" name="valor[]"/><br>
        <label>Digite o 8° valor: </label>
        <input type="number" name="valor[]"/><br>
        <label>Digite o 9° valor: </label>
        <input type="number" name="valor[]"/><br>
        <label>Digite o 10° valor: </label>
        <input type="number" name="valor[]"/><br>
        <input type="submit" value="Exibir Ordenados"/>
        </form>
            <?php
                if(!empty($_POST["valor"])){
                    $aVetor =$_POST["valor"];
                    echo "<pre>";
                        echo "<br>ORIGINAL<br>";
                        print_r($aVetor);
                        echo "<br>Ordenado crescente<br>";
                        sort($aVetor);
                        print_r($aVetor);
                        echo "<br>ORDENADO DECRESCENTE<br>";
                        rsort($aVetor);
                        print_r($aVetor);
                    echo "</pre>";
                }
            ?>
        </div>
    </body>
</html>