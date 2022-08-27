<?php include("estrutura/cabecalho.php"); ?>
<link rel = "stylesheet" href= "style/style.css"/>

<section>
      <?php
      $nome = "Izabella dos santos Silva";
      $idade= 18;
      $email= "izabella.silva26@etec.sp.gov.br";
      $status="";
      $nome2 = "Isabela Vitoria Auta da Costa";
      $Idade2 = 24;
      $email2= "Isabela.costa76@etec.sp.gov.br";
      $status2="";
      
      if ($idade >= 18) {
        $status= "Maior de idade";
      }
      
      else if ($idade2 >= 18){
        $status2= "Maior de idade";
      }

      echo "Izabella dos santos Silva";
        echo "18 anos";
        echo "izabella.silva26@etec.sp.gov.br";

        echo "Isabela Vitoria Auta da Costa";
        echo "24anos";
        echo "isabela.costa76@etec.sp.gov.br";
      
      ?>




</section>

<?php include("estrutura/rodape.php"); ?>
