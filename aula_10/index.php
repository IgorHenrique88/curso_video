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
        <h1>Herança</h1>
    </header>
    <pre>       
        <?php
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';

            $p1 = new Funcionario('Igor', 24, 'M');
            $p1-> setSetor('TI');

            $p1-> iniciarTrabalho();


            print_r($p1);

        ?>    
    </pre>
</body>
</html>