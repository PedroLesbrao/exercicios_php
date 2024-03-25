
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>Exercicios</h1>
        <div id="container">
        <form action=exercicio30.php method="post">
           <label>Digite am nome:</label>
           <input type="text" name="nome"/><br>
            <input type="submit" value="Exibir"/>
            </form>
            <?php
                if(!empty($_POST["nome"])){
                    $sNome = $_POST["nome"];
                    $asNome = str_split($sNome);
                    //marco Antonio de Silveira Campos
                    $Iniciais = $asNome[0];
                    for($i=1;$i<count($asNome);$i++){
                        if($asNome[$i]==" "){
                            if(strtoupper(substr($sNome,($i+1),3))!="DA "&&
                               strtoupper(substr($sNome,($i+1),3))!="DE "&&
                               strtoupper(substr($sNome,($i+1),3))!="DI "&&
                               strtoupper(substr($sNome,($i+1),3))!="DO "&&
                               strtoupper(substr($sNome,($i+1),3))!="DU "&&
                               strtoupper(substr($sNome,($i+1),2))!="E "&&
                               strtoupper(substr($sNome,($i+1),4))!="DAS "&&
                               strtoupper(substr($sNome,($i+1),4))!="DOS "&&){
                                $Iniciais.=$asNome[$i+1];
                               }
                        }
                    }
                    echo "<br><br>Nome: ".$sNome;
                    echo "<br><br>Iniciais: ".strtoupper($Iniciais);
                }
            ?>
        </div>
    </body>
</html>