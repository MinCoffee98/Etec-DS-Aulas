<?php
    include ("conexão.php");

    $stmt = $pdo -> prepare ("select * from tbproduto");
    $stmt -> execute ();

    while($row = $stmt -> fetch(PDO::FETCH_BOTH)){
        echo $row [0];
    }

?>