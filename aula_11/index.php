<!DOCTYPE html>
<html lang="en">

<!-- 
    Com uma classe abstract não podemos realizar uma instanciação, pois se trata de uma classe só para utilizar como superclasse
 -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de Classes</title>
</head>
<body>
    <header>
        <h1>Herança</h1>
    </header>
    <pre>       
        <?php
            require_once 'Visitante.php';
            require_once 'Bolsista.php';

            // $v1 = new Visitante('Igor', 23, 'M');
            // $v1-> fazerAniversario();
            // print_r($v1);

            $ab1 = new Bolsista('Igor', 23, 'M');
            $ab1-> renovarBolsa();

        ?>    
    </pre>
</body>
</html>