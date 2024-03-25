
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>Exercicios</h1>
        <div id="container">
        <form action="exercicio33.php" method="post">
        <label>Digite o 1° valor</label>
        <input type="number" name="valor[]" min= "1" max= "10"/><br>
        <label>Digite o 2° valor</label>
        <input type="number" name="valor[]" min= "1" max= "10"/><br>
        <label>Digite o 3° valor</label>
        <input type="number" name="valor[]" min= "1" max= "10"/><br>
        <label>Digite o 4° valor</label>
        <input type="number" name="valor[]" min= "1" max= "10"/><br>
        <label>Digite o 5° valor</label>
        <input type="number" name="valor[]" min= "1" max= "10"/><br>
        <label>Digite o 6° valor</label>
        <input type="number" name="valor[]" min= "1" max= "10"/><br>
        <label>Digite o 7° valor</label>
        <input type="number" name="valor[]" min= "1" max= "10"/><br>
        <label>Digite o 8° valor</label>
        <input type="number" name="valor[]" min= "1" max= "10"/><br>
        <label>Digite o 9° valor</label>
        <input type="number" name="valor[]" min= "1" max= "10"/><br>
        <label>Digite o 10° valor</label>
        <input type="number" name="valor[]" min= "1" max= "10"/><br>
        <label>Digite o 11° valor</label>
        <input type="number" name="valor[]" min= "1" max= "10"/><br>
        <label>Digite o 12° valor</label>
        <input type="number" name="valor[]" min= "1" max= "10"/><br>
        <label>Digite o 13° valor</label>
        <input type="number" name="valor[]" min= "1" max= "10"/><br>
        <label>Digite o 14° valor</label>
        <input type="number" name="valor[]" min= "1" max= "10"/><br>
        <label>Digite o 15° valor</label>
        <input type="number" name="valor[]" min= "1" max= "10"/><br>
        <label>Digite o 16° valor</label>
        <input type="number" name="valor[]" min= "1" max= "10"/><br>
        <label>Digite o 17° valor</label>
        <input type="number" name="valor[]" min= "1" max= "10"/><br>
        <label>Digite o 18° valor</label>
        <input type="number" name="valor[]" min= "1" max= "10"/><br>
        <label>Digite o 19° valor</label>
        <input type="number" name="valor[]" min= "1" max= "10"/><br>
        <label>Digite o 20° valor</label>
        <input type="number" name="valor[]" min= "1" max= "10"/><br>
        <label>Digite o Número a ser pesquisado</label>
        <input type="number" name="pesquisado" min= "1" max= "10"/><br>
        <input type="submit" value= "Exibir"/>
        </form>
            <?php
                if(!empty($_POST["valor"]) && !empty($_POST["pesquisado"])){
                    $aiNumeros = $_POST["valor"];
                    $iPesquisado = $_POST["pesquisado"];
                    $sPos="O número $iPesquisado <br>";

                    for($i=0;$i<count($aiNumeros);$i++){
                        if($aiNumeros[$i]==$iPesquisado){
                            $sPos.= "está na posição: $i <br>";
                        }
                    }
                    echo "<pre>";
                    print_r($aiNumeros);
                    echo "</pre>";
                    echo "<br><br>";
                    if($sPos== "O número $iPesquisado <br>"){
                        echo $sPos." não foi encontrado no array.";
                    }else{
                        echo $sPos;
                    }

                }
            ?>
        </div>
    </body>
</html>