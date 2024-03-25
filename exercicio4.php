<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="estilo.css"/>
</head>
<h1>CT desenvolvimento de sistema - Back End</h1>
    <body>
        <div id="container">
            <?php
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $num3 = $_POST["num3"];
                $iMaior =0;
                $iMeio  =0;
                $iMenor =0;
                
                if($num1 > $num2 && $num1>$num3){
                    $iMaior = $num1;
                    if($num2>$num3){
                        $iMeio = $num2;
                        $iMenor = $num3;
                    }else{
                        $iMeio =$num3;
                        $iMenor = $num2;
                    }
                } else if($num2 > $num1 && $num2>$num3){
                    $iMaior = $num2;
                    if($num1>$num3){
                        $iMeio = $num1;
                        $iMenor = $num3;
                    }else{
                        $iMeio =$num3;
                        $iMenor = $num1;
                    }
                 } else if($num3 > $num1 && $num3>$num2){
                        $iMaior = $num3;
                        if($num2>$num1){
                            $iMeio = $num2;
                            $iMenor = $num1;
                        }else{
                            $iMeio =$num1;
                            $iMenor = $num2;
                        }
                    }
                echo "$iMaior, $iMeio e $iMenor";
            ?>
        </div>
    </body>
</html>