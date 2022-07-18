<?php include("conexão.php")?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css" media="screen">
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>TB+RECRUTAMENTO</title>
</head>

<body>
    
    <div class="pagina-inicial" >
    <h1 >
    <span>OLÁ SOMOS A HARD CODE!</span>
    </h1>
    <p>
    <h2><SPAN>Somos uma empresa global com escritorios em:</SPAN>
    <br>
    <br>
    <span>
        <strong>
            MIAMI - USA<br>
            SÃO PAULO - BR<br>
            CEARÁ - BR<br>
    </strong>
    </span>
    
    <p>
    <SPAN>
        Atuamos nos segmentos 
        <strong> 
            financeiro, turismo, criação de 
            conteúdo,<br> consultoria e desenvolvimento de produtos e tecnologia.
</strong>
        </SPAN>
    </p>
    <p>Possuímos diversas vagas nas áreas:</p>
    <span>
        <strong>
            Produto & Tecnologia<br>
            Marketing & Vendas <br>
            Operação & Pessoas
</strong>
        </span>
        <p>Quer trabalhar em uma empresa com a cultura de startup?</p>
        <p>Só preencher o formulário!</p>
    </div>

    <div id="fixed-bot">
    <p>
        <div id="tempo"><span >Gasta 7+ minutos</span></div>
        <br>
        <div ><input id="avançar" type="submit" value="LET'S GO!!!" onclick="location.href='perguntas.php'" ></input><LABEL>     avançar com Enter</LABEL>
    </p>
</div>

    <script>
        
        jQuery(document.body).on('keypress', function (e) {
    if (e.keyCode === 13) {
        e.preventDefault();
            $("#avançar").trigger("click");
            }
        }); 
           
    </script>
</body>
<style>
    .pagina-inicial{
        
        margin-left:30%;
        margin-top:7%;
    }

    h2{
        font-weight:normal;
    }

    h1{
        font-weight:normal;
    }

    #fixed-bot{
        display:flex;
        width:100%;
        align-items:center;
        box-shadow:rgb(0,0,0 /10%) 0px -1px;
        background-color:rgb(0,0,0,0.05);
        flex-direction: column;
        -webkit-box-align: center;
        z-index:10;

    }
    #tempo{
    
    }
    #avançar{
        background : rgb(178,33,33);
        color: white;
        border-radius: 4px;
        position: relative;
        font-family: inherit;
        font-weight: 700;
        cursor: pointer;
        padding: 8px 18px;
        min-height:48px;
        line-height:inherit;
        border: 1px solid transparent;
        margin:0px;
        outline:none;
        

    }
</style>
</html>