<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel= "stylesheet" href= "css/style.css">
    
    <title>Decisao</title>
</head>

<body>
    <?php
       
       $nota1 = 6;
       $nota2 = 8;
       $nota3 = 5;
       $nota4 = 4;

            $media = ( $nota1 + $nota2 + $nota3 + $nota4) / 4;
        
        if ( $media >= 6 ){
            echo "<h1> APROVADO </h1>";
        }

        else {
            echo "<h1> REPROVADO </h1>";
        }

    
    ?>

</body>

</html>