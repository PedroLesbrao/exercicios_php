
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>Exercicios</h1>
        <div id="container">
        <form action=exercicio41.php method="post">
           <label>Digite o 1° valor:</label>
           <input type="number" name="valor[]" /><br>
           <label>Digite o 2° valor:</label>
           <input type="number" name="valor[]" /><br>
           <label>Digite o 3° valor:</label>
           <input type="number" name="valor[]" /><br>
           <label>Digite o 4° valor:</label>
           <input type="number" name="valor[]" /><br>
           <label>Digite o 5° valor:</label>
           <input type="number" name="valor[]" /><br>
           <label>Digite o 6° valor:</label>
           <input type="number" name="valor[]" /><br>
           <label>Digite o 7° valor:</label>
           <input type="number" name="valor[]" /><br>
           <label>Digite o 8° valor:</label>
           <input type="number" name="valor[]" /><br>
           <label>Digite o 9° valor:</label>
           <input type="number" name="valor[]" /><br>
           <label>Digite o 10° valor:</label>
           <input type="number" name="valor[]" /><br>
           <label>Digite o 11° valor:</label>
           <input type="number" name="valor[]" /><br>
           <label>Digite o 12° valor:</label>
           <input type="number" name="valor[]" /><br>
           <label>Digite o 13° valor:</label>
           <input type="number" name="valor[]" /><br>
           <label>Digite o 14° valor:</label>
           <input type="number" name="valor[]" /><br>
            <input type="submit" value="Exibir"/>
            </form>
            <?php
            if(!empty($_POST["valor"])){
                $aiNumeros = $_POST["valor"];
                $aPAR=array();
                $aIMPAR=array();
                foreach($aiNumeros as $iNum){
                    if($iNum%2==0){
                        $aPAR[]=$iNum;
                    }else{
                        $aIMPAR[]=$iNum;
                    }
                }
                }
                echo "<pre>";
                print_r($aiNumeros);
                echo "<br> PARES:<br>"; 
                print_r($aPAR);
                echo "<br> IMPARES:<br>"; 
                print_r($aIMPAR);
                echo "</pre>";
                
            ?>
        </div>
    </body>
</html>