
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
        <form action=exercicio17.php method="post">
            Digite o primeiro numero:<input type="number" name="num1"/><br>
            Digite o segundo  numero:<input type="number" name="num2"/><br>
            Digite o terceiro numero:<input type="number" name="num3"/><br>
            <input type="submit" value="Calcular"/>
        </form>
            <?php
                if(!empty($_POST["num1"]) && !empty($_POST["num2"]) && !empty($_POST["num3"])){
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];
                    $num3 = $_POST["num3"];
                

                    function somar($num1, $num2, $num3){
                        return ($num1+$num2+$num3);
                    }
                    function media($num1,$num2,$num3){
                        $soma = somar($num1,$num2,$num3);
                        echo "A media dos valores é ".$soma/3;
                    }
                    echo "O resultado de $num1 + $num2 + $num3 é: ".somar($num1,$num2,$num3)."<br>";
                    media($num1,$num2,$num3);
                }
            ?>
        </div>
    </body>
</html>