<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função e Proscedimento</title>
</head>
<body>
    <?php


     //FUNÇÂO
    // nome da função deve ser um verbo no infinitivo (questão de qualidade de software)
    function somar ($num1,$num2){// variavel referenciada na função é um PARAMETRO
        $resultado = $num1 + $num2;
        echo "O resultado é $resultado ";
        //return $num1 + $num2;
    }
    
    //PROCEDIMENTO
    function exibirMSG(){
        echo "Bem-Vindo ao Procedimento";
    }
    
    somar(5,3);
    

    exibirMSG();

    
    ?>
</body>
</html>