<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>execicio11</title>
    </head>
    <body>
        <form method="post" action=exercicio11.php>
        <label>digite a palavra:</label>
        <input type="text" name="palavra"><br><br>
        <input type="submit" value="Exibir palavras"><br><br>
        </form>
        <?php
            if(!empty($_POST["palavra"])){
                $palavra  =$_POST["palavra"];
                $iTamanho =strlen($palavra) ;
                for($i=1;$i<=$iTamanho;$i++){
                    for($j=1;$j<=$i;$j++){
                        echo "$palavra";
                    }
                    echo "<br>";
                }
            }
        ?>
    </body>
</html>