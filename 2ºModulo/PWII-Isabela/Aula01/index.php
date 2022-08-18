<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>

<body>
    <h1> Hello World! </h1>

    <?php  
        //no php o símbolo de . é para concatenação

        $nome = "Isabela";
        $nome2 = "\nVitória";
        $idade = 23;
        $peso = 60;


        echo "Hello World!";
        echo "<h1> Teste </h1>";
        echo $nome;
        echo $nome2;
        echo $idade;
        echo $peso;

        echo  "<br/>Nome: $nome \n $nome2 <br/> Idade: $idade <br/> Peso: $peso";

        echo 'Texto '  . $nome;
        
        // Operadores Aritméticos + - * / %
        echo "<br/> <br/> <br/>";

        //Processamento
        $n1 = 8;
        $n2 = 6;
        $soma = $n1 + $n2;
        $subtracao = $n1 - $n2;
        $multiplicacao = $n1 * $n2;
        $divisao = $n1 / $n2;
        $resto = $n1 % $n2;


        //Saída
        echo "$n1 + $n2 = $soma <br/>";
        echo "$n1 - $n2 = $subtracao <br/>";
        echo "$n1 * $n2 = $multiplicacao <br/>";
        echo "$n1 / $n2 = $divisao <br/>";
        echo "$n1 % $n2 = $resto <br/>";
    ?>
    
</body>

</html>