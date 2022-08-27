<?php include("estrutura/cabecalho.php"); ?>

<?php 

    $nome = $_POST["txNome"];
    $email = $_POST["txEmail"];
    $assunto = $_POST["txAssunto"];
    $mensagem = $_POST["txMensagem"];
 
    $genero = $_POST ["rGenero"];

    echo "$nome <br/> $email <br/> $assunto <br/> $mensagem";
    
    echo "<br/> <br/>";

    echo $genero;

?>
<?php include("estrutura/rodape.php"); ?>