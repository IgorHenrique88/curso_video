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
            require_once 'Pessoa.php';
            require_once 'Livro.php';

            $p[0] = new Pessoa('Igor', 23, 'M');
            $p[1] = new Pessoa('Leticia', 22, 'F');

            $l1 = new Livro('Sonhos Lucidos', 'Igor', 100, $p[0]);
            $l1->detalhe();


            
        ?>    
    </pre>
</body>
</html>