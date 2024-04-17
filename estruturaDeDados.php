<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de dados</title>
</head>
<body>
    <?php
    
    $aluno = array ("nome" => "Tiago", "idade" => 15);

    $alunos = array(
        array("nome" => "João", "idade" => 20 ),// vetor 0 aeeee
        array("nome" => "Maria", "idade" => 15 )// vetor 1
    );

    echo"Nome: " . $alunos [0]["nome"]; // imprime vetor (Array)
//adiciona valor ou valores ao vetor/vetores
    $alunos[] = array("nome" => "Ana", "idade" => 18);
    
    ?>
</body>
</html>
