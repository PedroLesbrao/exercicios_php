<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
    <h1>CT Desenvolvimento de Sistemas Back-End</h1>
    <div id="container">
        <?php
            echo "Exemplo de CAST e concatenação<br>";
            echo "CAST é uma conversão de tipo em tempo de execução<br>";
            echo "Concatenação é a junção de strings e variáveis<br>";
            $valor = 15;
            echo "Valor original ".$valor."<br>";
            
            $fValor = (float)$valor;
            echo "Valor float ".$fValor."<br>";        
            
            $valor = 3.9;
            $iValor = (int)$valor;
            echo "Valor inteiro $iValor <br>";

            /*
            (int),(Integer) = muda para inteiro
            (real),(float),(double) = muda para decimal
            (string) = muda para array
            (object) = muda para objeto
            */

            $valor = 25;
            settype($valor,"double");
            echo "Valor double".$valor."<br>";




        ?>
        </div>
    </body>
</html>