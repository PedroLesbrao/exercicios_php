
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>Exercicios</h1>
        <div id="container">
        <form action=exercicio24.php method="post">
           <label>Digite a cadeia de DNA:</label>
           <input type="text" name="cadeia"/><br>
            <input type="submit" value="Exibir"/>
            </form>
            <?php
                if(!empty($_POST["cadeia"])){
                    $cadeia=$_POST["cadeia"];
                    echo "<br>Cadeia DNA.........: $cadeia";
                    //str_split converte uma string em um vetor de letras
                    $asCadeia = str_split($cadeia);
                    $iTam = count($asCadeia);
                    for($i=0;$i<$iTam;$i++){
                        if($asCadeia[$i]=="T"){
                            $asCadeia[$i]="A";
                        }else if($asCadeia[$i]=="A"){
                            $asCadeia[$i]="T";
                        }else if($asCadeia[$i]=="C"){
                            $asCadeia[$i]="G";
                        }else if($asCadeia[$i]=="G"){
                            $asCadeia[$i]="C";
                        }
                    }
                    $sComplementar = implode($asCadeia);
                    echo "<br> Cadeia Complementar: $sComplementar";
                }
            ?>
        </div>
    </body>
</html>