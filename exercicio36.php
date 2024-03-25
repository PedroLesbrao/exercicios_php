
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>Exercicios</h1>
        <div id="container">
        <form action=exercicio36.php method="post">
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
            <input type="submit" value="Mostrar repetidos"/>
            </form>
            <?php
                  if(!empty($_POST["valor"])){
                    $aiNumeros  = $_POST["valor"];
                    $aiTemp     = $_POST["valor"];
                    $sRepetidos = "";
                    /*
                    v = 1,2,3,4,3,2,3
                    v = 1,2,3,,4,3,*,3 
                    */




                    for($i=0;$i<count($aiNumeros);$i++){
                        for($j=0;$j<count($aiNumeros);$j++){
                            if($aiTemp[$i]==$aiTemp[$j] && $i!=$j && $aiTemp[$i]!="*"){
                                $sRepetidos.=$aiTemp[$i]." em $i e ".$j."<br>";
                                $aiTemp[$j]="*";
                            }
                        }
                    }
                    echo "<pre>";
                        print_r($aiNumeros);
                    echo "</pre>";
                    echo "<br><br>repetidos: <br> $sRepetidos<br>";
                    } 
                    
            ?>
        </div>
    </body>
</html>