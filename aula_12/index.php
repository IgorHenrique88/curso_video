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
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Canguru.php';


            $m1 = new Mamifero();
            $m1-> emitirSom();

            $r1 = new Reptil();
            $r1-> emitirSom();

            $p1 = new Peixe();
            $p1-> emitirSom();

            $c1 = new Canguru();
            $c1-> locomover();
    


        ?>    
    </pre>
</body>
</html>