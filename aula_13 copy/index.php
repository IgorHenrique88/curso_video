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
        <h1>Polimorfismo</h1>
    </header>
    <pre>       
        <?php
            require_once 'Cachorro.php';
 
            $l = new Lobo();
            $l-> emitirSom();

            $c = new Cachorro();
            $c-> emitirSom();


        ?>    
    </pre>
</body>
</html>