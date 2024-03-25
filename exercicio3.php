
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
                $sNome=empty($_POST["name"])?"Nome não informado":$_POST["nome"];
                $sGenero =$_POST["genero"];
                $Idade   =$_POST["idade"];
                if($sGenero ==$Idade<=25){
                    echo "Candidata ACEITA";
                }else{
                    echo "Candidata Não aceita";
                }
                
            ?>
        </div>
    </body>
</html>