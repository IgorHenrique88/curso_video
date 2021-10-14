<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de Encapsulamento</title>
</head>
<body>
    <header>
        <h1>Encapsulamento</h1>
    </header>
    <pre>       
        <?php
            require_once 'ControleRemoto.php';
            $controle1 = new ControleRemoto();
            // $controle1->ligar();
            $controle1->maisVolume();
            $controle1->maisVolume();
            $controle1->play();            
            $controle1->abrirMenu();
        ?>    
    </pre>
</body>
</html>