
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
            <?php
                $Meses= $_POST["meses"];

                if($Meses==1){
                    echo "O mês correspondente é Janeiro";
                }else if($Meses ==2){
                    echo "O mês correspondente é Fevereiro";
                }else if($Meses ==3){
                    echo "O mês correspondente é Março";
                }else if($Meses ==4){
                    echo "O mês correspondente é Abril";
                }else if($Meses ==5){
                    echo "O mês correspondente é Maio";
                }else if($Meses ==6){
                    echo "O mês correspondente é Junho";
                }else if($Meses ==7){
                    echo "O mês correspondente é Julho";
                }else if($Meses ==8){
                    echo "O mês correspondente é Agosto";
                }else if($Meses ==9){
                    echo "O mês correspondente é Setembro";
                }else if($Meses ==10){
                    echo "O mês correspondente é Outubro";
                }else if($Meses ==11){
                    echo "O mês correspondente é Novembro";
                }else if($Meses ==12){
                    echo "O mês correspondente é Dezembro";
                }else{
                    echo "Não existe mês com esse numero";
                }
            ?>
        </div>
    </body>
</html>