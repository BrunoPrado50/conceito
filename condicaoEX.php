<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condição</title>
</head>
<body>
   <?php 
    //Condição Simples: Resultado de 2 Possibilidades: V/F
    $a = 10;
    if($a > 10){
        echo "A é maior do que 10.";
    }
    else{
        echo "A não é maior do que 10.";
    }
    //Condição Composta: Resultado de 3 Possibilidades: V/(V/F)/F
    $b = 10;
    if($b > 10){
        echo "B é maior do que 10.";
    }
    else if($b < 10){
        echo "B é menor do que 10.";
    }
    else{
        echo "B é igual 10.";
    }
    //Condição Encadeada: Resultado de 3 ou mais possibilidades
    $c = 1;
    if($c == 1){
        echo "C é 1.";
    }
    if($c == 2){
        echo "C é 2.";
    }
    if($c == 3){
        echo "C é 3.";
    }

    //Condição baseado em Casos
    $dia = "quarta";
    switch ($dia){
        case "segunda":
        case "terça":
        case "quarta":
        case "quinta":
        case "sexta":
            echo "Dias da semana";
            break;
        case "sábado":
        case "domingo":
            echo "Final de semana";
            break;
        default:
            echo "Dia inválido";
            break;
        }




   ?> 
</body>
</html>