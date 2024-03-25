<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>EXERCICIO 13</title>
    </head>
    <body>
        <?php
            $iConta =0;
            $iNum = 1000;
            while($iConta<5){
                $iNum++;
                if($iNum%11==5){
                    $iConta++;
                    echo "$iConta °numero:$iNum<br>";
                }
            }
            echo "<br>O quinto número maior que 1000, cuja divisão
            por 11 da resto 5 é $iNum";
        ?>
    </body>
</html>