<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
<body>
    <pre>       
        <?php
            require_once 'Caneta.php';
            require_once 'Caneca.php';  

            // $caneta01 = new Caneta();
            // $caneta01->setModelo("BIC");
            // $caneta01->setCor("Azul");
            // $caneta01->setPonta(0.8);
            // $caneta01->setTampada(true);
            // $caneta01->setCarga(90);
            // print_r($caneta01);        
            // echo '<br>';

            $caneta02 = new Caneta("BIC Cristal", "Preta", 0.5);
            print_r($caneta02);



            $celular01 =  new Celular("Xiaomi", "Redmi", 6.5);
            $celular01 -> setCamera(4);
            $celular01 -> setCor("Preto");
            $celular01 -> setDigital(true);
            $celular01 -> ligar();
            // $celular01 -> setDesligado(true);
 
            print_r($celular01);



        ?>    
    </pre>
</body>
</html>