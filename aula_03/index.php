<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
<body>
    <?php
        require_once 'Caneta.php';
        require_once 'Caneca.php';

        $caneta01 = new Caneta;
        // $caneta01-> cor = 'Azul' ;
        $caneta01-> modelo = 'Bic Cristal';
        // $caneta01-> tampada = true;
        print_r($caneta01);
        
        echo '<br>';
        
        $caneta02 = new Caneta;
        $caneta02-> cor = 'Verde';
        $caneta02-> modelo = 'Bic Cristal';
        $caneta02-> carga = 70;
        $caneta02->tampar();
        print_r($caneta02);
        
        echo '<br>';
        
        $caneca01 = new Caneca;
        $caneca01->cor = 'Branco e Verde';
        $caneca01->volume = 120;
        $caneca01->encher();
        print_r($caneca01);
        
        echo '<br>';

        $agenda = new Agenda;
        $agenda-> dia = 15;
        // $agenda-> mes = 'Novembro';
        // $agenda-> ano = 2021;
        $agenda-> marcar();
        print_r($agenda);
    ?>    
</body>
</html>