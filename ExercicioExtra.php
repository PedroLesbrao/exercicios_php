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
                 $Valor  =$_POST["valor"];
                 $resultado ="";

                 if($Valor >0){
                     $resultado="Valor Positivo";
                 }elseif($Valor <0){
                     $resultado="Valor Negativo";
                 }else{
                     $resultado="Igual á Zero";
                 }
                 echo $resultado;
            ?>
        </div>
    </body>
</html>