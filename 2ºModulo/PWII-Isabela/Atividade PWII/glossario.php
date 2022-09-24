<?php include("templates/cabecalho.php"); ?>
<link rel = "stylesheet" href= "css/style.css"/>
<?php
        $palavra = array();
        $palavra[0] = "panqueca";
        $palavra[1] = "feijoada";
        $palavra[2] = "Estrogonofe";
        $palavra[3] = "Cuscuz";
        $palavra[4] = "Hamburguer";

        $descricao = array();
        $descricao[0] = "prato que consiste em uma massa com um recheio de sua preferência";
        $descricao[1] = "Prato feito com feijão e carnes específicas";
        $descricao[2] = "frango ao molho de creme de leite";
        $descricao[3] = "farinha de milho cozida";
        $descricao[4] = "pão com carne, quejo e salada";


        $link = array();
        $link[0] = "PWII/resultado.php";
        $link[1] = "PWII/feijoada.php";
        $link[2] = "PWII/estrogonofe.php";
        $link[3] = "PWII/cuscuz.php";
        $link[4] = "PWII/hamburguer.php";

        $imagem = array();
        $imagem[0] = "img/panqueca.jpg";
        $imagem[1] = "img/feijoada.jpg";
        $imagem[2] = "img/estrogonofe.jpg";
        $imagem[3] = "img/cusucz.jpg";
        $imagem[4] = "img/hamburguer.jpg";

        $alterar = array();
        $alterar[0] = "";
        $alterar[1] = "";
        $alterar[2] = "";
        $alterar[3] = "";
        $alterar[4] = "";

        echo "<table> 
                <thead>
                    <tr>
                        <th></th>
                        <th>País</th>
                        <th>Continente</th>
                        <th>Saiba Mais</th>
                    </tr>
                </thead>
                
                <tbody>";

            for ($i = 0; $i < count($glossario); $i++) {
                echo "<tr>
                        <td><img src='$palavra[$i]'/></td>          
                        <td>$descricao[$i]</td>          
                        <td>$imagem[$i]</td>
                        <td>
                            <a href='glossario.php?x=$palavra[$i]&y=$descricao[$i]&z=$imagem[$i]' target='blank'> $glossario[$i]</a>
                        </td>
                      </tr>";
            }            

        echo "</tbody>
            </table>";
    ?>

