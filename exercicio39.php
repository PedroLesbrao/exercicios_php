
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>Exercicios</h1>
        <div id="container">
        <form action=exercicio39.php method="post">
           <label>Digite o 1° valor:</label>
           <input type="number" name="valor[]" min=0 max=100/><br>
           <label>Digite o 2° valor:</label>
           <input type="number" name="valor[]" min=0 max=100/><br>
           <label>Digite o 3° valor:</label>
           <input type="number" name="valor[]" min=0 max=100/><br>
           <label>Digite o 4° valor:</label>
           <input type="number" name="valor[]" min=0 max=100/><br>
           <label>Digite o 5° valor:</label>
           <input type="number" name="valor[]" min=0 max=100/><br>
           <label>Digite o 6° valor:</label>
           <input type="number" name="valor[]" min=0 max=100/><br>
           <label>Digite o 7° valor:</label>
           <input type="number" name="valor[]" min=0 max=100/><br>
           <label>Digite o 8° valor:</label>
           <input type="number" name="valor[]" min=0 max=100/><br>
           <label>Digite o 9° valor:</label>
           <input type="number" name="valor[]" min=0 max=100/><br>
           <label>Digite o 10° valor:</label>
           <input type="number" name="valor[]" min=0 max=100/><br>
            <input type="submit" value="Exibir"/>
            </form>
            <?php
            if(!empty($_POST["valor"])){
                $aiNumeros = $_POST["valor"];
                $iSoma = 0;
                foreach($aiNumeros as $iNum){
                    if($iNum%5==0){
                        $iSoma+=$iNum;
                        echo "<br>$iNum"; //so para exibir os multiplos
                    }
                }
                echo "<pre>";
                    print_r($aiNumeros);
                echo "</pre>";
                echo "<br><br>A soma dos multiplos é $iSoma<br>";
            }
            ?>
        </div>
    </body>
</html>