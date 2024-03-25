
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
        <form action=exercicio22.php method="post">
            Digite um numero inteiro para verificar se é perfeito:<input type="number" name="num"/><br>
            Digite um numero inteiro positivo para saber quais entre 1 
            o número digitado são perfeitos:<input type="number" name="num2" min=1 max=10000//><br>
            <input type="submit" value="Mostrar Perfeitos"/>
        </form>
            <?php
                if(!empty($_POST["num"]) && !empty($_POST["num2"])){
                    $num  = $_POST["num"];
                    $num2 = $_POST["num2"];
                    function ehPerfeito ($numero){
                        $soma=0;
                        for($i=1; $i<$numero;$i++){
                            if($numero%$i==0){
                                $soma+=$i;
                            }
                        }
                        if($soma==$numero){
                            return true;
                        }else{
                            return false;
                        }
                    }
                    function mostraPerfeitos($numero){
                        for($i=1;$i<=$numero;$i++){
                            if(ehPerfeito($i)){
                                echo "O numero $i é perfeito!<br>";
                            }
                        }
                    }
                    //testando os números digitados no input
                    if(ehPerfeito($num)){
                        echo "O numero $num é PERFEITO!<br><br>";
                    }else{
                        echo "O numero $num não é PERFEITO!<br><br>";
                    }
                    mostraPerfeitos($num2);
                }
            ?>
        </div>
    </body>
</html>