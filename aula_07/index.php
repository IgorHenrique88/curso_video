<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de Classes</title>
</head>
<body>
    <header>
        <h1>Relacionamento de Classes</h1>
    </header>
    <pre>       
        <?php
            require_once 'Lutador.php';
            require_once 'Luta.php';
            $l = [];
            $l[0] = new Lutador('Pretty Boy', 'Franca', 31, 1.75, 68.9, 11, 2, 1, date('11/07/21'));         
            $l[1] = new Lutador('Putscript', 'Brasil', 29, 1.68, 57.8, 14, 2, 3, date('30/01/21'));
            $l[2] = new Lutador('SnapShadow', 'EUA', 35, 1.65, 80.9, 12, 2, 1, date('01/01/20'));
            $l[3] = new Lutador('Dead Code', 'Austrália', 35, 1.65, 81.6, 13, 0, 2, date('05/08/19'));
            $l[4] = new Lutador('UFOCobol', 'Brasil', 37, 1.70, 119.3, 5, 4, 3, date('09/09/18'));
            $l[5] = new Lutador('Nerdart', 'EUA', 30, 1.81, 105.7, 12, 2, 4, date('01/09/18'));
            
            $uec = new Luta();

            
        ?>    
    </pre>
</body>
</html>