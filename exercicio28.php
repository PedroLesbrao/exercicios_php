
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>Exercicios</h1>
        <div id="container">
        <form action=exercicio28.php method="post">
           <label>Digite a primeira palavra:</label>
           <input type="text" name="palavra1"/><br>
           <label>Digite a segunda palavra:</label>
           <input type="text" name="palavra2"/><br>
            <input type="submit" value="Exibir"/>
            </form>
            <?php
                if(!empty($_POST["palavra1"]) && !empty($_POST["palavra2"])){
                    //remove os espaços e converte para maiusculas
                    $pal1=strtoupper(str_replace(" "," ",$_POST["palavra1"]));
                    $pal2=strtoupper(str_replace(" "," ",$_POST["palavra2"]));
                    //Criando os vetore de letra
                    $asPal1 = str_split($pal1);
                    $asPal2 = str_split($pal2);
                    //percorre as letras da palavra 1
                    $iConta=0;
                    for($i=0;$i<count($asPal1);$i++){
                        //percorre as letras da palavra 2
                        for($j=0;$j<count($asPal2);$j++){
                            //se achar a letra do 1 em 2, conta e substitui
                            //por um | (pipe) para não achar novamente.
                            if($asPal1[$i]==$asPal2[$j]){
                                $iConta++;
                                $asPal2[$j]="|";
                                break;
                            }
                        }
                    }
                    //Verifica se a quantidade de letra encontradas
                    //é igual a quantidade de letras da palavra 1
                    //se for, é porque são ANAGRAMAS;
                    if($iConta==count($asPal1)){
                        echo "$pal1 e $pal2 - SÃO ANAGRAMAS";
                    }else{
                        echo "$pal1 e $pal2 - NÃO SÃO ANAGRAMAS";
                    }
                }
            ?>
        </div>
    </body>
</html>