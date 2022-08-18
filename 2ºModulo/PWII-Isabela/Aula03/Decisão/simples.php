<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../style/decisao.css">
    <title> Decisão Simples </title>
</head>
<body>
    
    
    <?php 
    
        echo "<h1> Decisão Simples e Composta ( if, else ) </h1>";

        // o Aluno de tal, para ser aprovado tem que tirar média 7 ou superior para ser aprovado;
        // serão 2 atividades que valem de 0 a 10;

        //operadóres lógicos && (e), || ( ou ), ! (not)

        $nome = "Taehyung";
        $n1 = 8;
        $n2 = 9;

        $media = ( $n1 + $n2 ) / 2;

        if ( $media >=7 ) {
            echo "<div>
                    <h3> Aluno(a) $nome! </h3>
                    <p>
                        Sua Média foi de: $media, <br />
                        Portanto você foi <span class = 'apro' > Aprovado(a) </span>!
                    </p>
                  </div>";
        }

        else {
            echo "<div>
                    <h3> Aluno(a) $nome! </h3>
                        <p>
                            Sua Média foi de: $media, <br />
                            Portanto você foi <span> Reprovado(a) </span>!
                        </p>
                 </div>";
        }



    
    ?>


</body>
</html>