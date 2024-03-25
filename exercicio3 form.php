
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
                
            ?>
            <form method="post" action="exercicio3.php">
                <label>Digite o Nome:</label><br>
                <input type="text" name="nome"><br>
                <label>Digite sua Idade:</label><br>
                <input type="number" name="idade" min=1 max=85><br>
                <fieldset>
                    <legend>GÊNERO:</legend>
                    <input type="radio" name="genero" value="masculino" name="masculino">
                    <label>MASCULINO</label><br>
                    <input type="radio" name="genero" value="feminino" name="feminino">
                    <label>FEMININO</label>
                </fieldset>
                <input type="submit" value="ENVIAR">
            </form>
        </div>
    </body>
</html>