<?php include("estrutura/cabecalho.php"); ?>

<section>
    <h1> Contato </h1>   
</section>

<section id= "area">
    <form action = "dados-contato.php" method= "post">
        <div id= "form">
            <div> <label> Nome </label> </div>
                <input type = "text " name= "txNome" placeholder = "Digite seu nome"/>     
        
            <div> <label> Gênero </label> </div>
                <input type = "radio" name = "rGenero" value = "Masculino"/> Masculino
                <input type = "radio" name = "rGenero" value = "Feminino"/> Feminino
        
            <div> <label> E-mail </label> </div>
                <input type = "email" name= "txEmail"placeholder = "Digite seu e-mail"/>
        
            <div> <label for= "fassunto"> Assunto </label> </div>
                <input type = "text" name= "txAssunto" id= "fassunto"placeholder = "Digite o assunto"/>
            
            <div>  <label> Mensagem </label> </div>
                <textarea name= "txMensagem"placeholder = "Digite sua mensagem" ></textarea>
            <div>
                <input type = "Submit" class= "bt" values= " " />
            </div>
        </div>

    </form>
</section>
