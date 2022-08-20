<?php include("estrutura/cabecalho.php"); ?>

<section>
    <h1> Contato </h1>   
</section>

<section id= "area">
    <form>
        <div id= "form">
            <div> <label> Nome </label> </div>
                <input type = " text " placeholder = "Digite seu nome"/>     
        
            <div> <label> Gênero </label> </div>
                <input type = "radio" name = "rGenero"/> Masculino
                <input type = "radio" name = "rGenero"/> Feminino
        
            <div> <label> E-mail </label> </div>
                <input type = "email" placeholder = "Digite seu e-mail"/>
        
            <div> <label for= "fassunto"> Assunto </label> </div>
                <input type = "text" id= "fassunto"placeholder = "Digite o assunto"/>
            
            <div>  <label> Mensagem </label> </div>
                <textarea placeholder = "Digite sua mensagem" ></textarea>
        </div>
    </form>
</section>
