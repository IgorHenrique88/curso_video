<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05</title>
</head>
<body>
    <pre>       
        <?php
            require_once 'ContaBanco.php';

            $c1 = new ContaBanco();

            $c1 -> abrirConta('CC');
            print_r($c1);
            
            $c1-> depositar(20);
            print_r($c1);
            
            $c1-> depositar(200);
            print_r($c1);
            
            $c1-> pagarMensalidade();
            print_r($c1);

            


        ?>    
    </pre>
</body>
</html>