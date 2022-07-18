<?php include("conexão.php")?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Perguntas</title>
</head>
<body>
    <style>
        body{
            margin-left:30%;
            margin-top:15%;
            
        }
        #geral{
            font-family: inherit;
            font-weight: normal;
            font-size:25px;
             
        }
        input type{

        }
    </style>
<div id="geral">
    <div id="question 1" >

        <span id="primeira">1-> Qual é o seu <strong>Nome</strong>?*</span>
        <p><span>Por favor informar o nome completo.</span><br></p>
        <p><input type="text" name="Nome" autocomplete="name" placeholder="Responda aqui..."></p>
        <p><input type="button" id="avançar" name ="Avançar" value="Avançar"onclick="nextQuestion()"> <label>avançar com <strong>Enter</strong></label></p>
 
    </div>
    
    <div id="question 2" style = "display:none">

        <span>2-> Qual é a sua <strong>DATA DE NASCIMENTO</strong>?*</span>

        <p></p><LABEl>Dia</LABEl>
        
        <label>Mês</label>

        <label>Ano</label>
        <p>

        <input type="date" name="datanasc">

        <p><button id="avançar2" onclick="nextQuestion2()"><strong>Avançar</strong></button> <label>avançar com <strong>Enter</strong></label></p>

    </div>
    
    
    <div id="question 3" style = "display:none">
    
        <span>3-> Qual é o seu <strong>E-MAIL</strong>?*</span>
        <p><span>Certifique-se de que informou o e-mail correto.</span><br></p>
        <p><input type="text" name="email" autocomplete="name" placeholder="alguem@exemplo.com"></p>
        <p><button onclick="nextQuestion3()" id="avançar3"><strong>Avançar</strong></button> <label>avançar com <strong>Enter</strong></label></p>
    
    </div>

    <div id="question 4" style = "display:none">
    
        <span>4-> Qual é o seu número de <strong>CEULAR</strong>?*</span>
        <p><span>Nosso primeiro contato sempre será por <strong>voz</strong>, caso contrário, enviamos<br>um e-mail, uma mensagem por <strong>SMS</strong> ou <strong>Whatsapp.</strong></span><br></p>
        <p><input type="text" name="celular" autocomplete="name" placeholder="(11) 96123-4567"></p>
        <p><button onclick="nextQuestion4()" id="avançar4"><strong>Avançar</strong></button> <label>avançar com <strong>Enter</strong></label></p>
    
     </div>

    <div id="question 5" style = "display:none">
    
        <span>5-> Qual<strong> CIDADE</strong> você mora?*</span><p>
              
        <input type="checkbox" value="A" id="JN">Juazeiro do Norte
        <input type="checkbox" value="B" id="Ba">Barbalha<br>
       <input type="checkbox" value="C" id="Cr">Crato
       <input type="checkbox" value="D" Id="Mi">Miami<br>
       <input type="checkbox" value="E" id="SP">São Paulo
       <input type="checkbox" value="F" id="Outros">Outros  
        <p><button id="avançar5" onclick="nextQuestion5()"><strong>Avançar</strong></button>
        
</div>
        <div id="question6" style="display:none">
            <span>6-> Você aceita trabalhar presencialmente em nosso <BR><strong>ESCRITÓRIO</strong>?*</span>
            <br>
        <input type="checkbox" value="S">Sim <br>
        <input type="checkbox" value="N">Não
            <p><button id="avançar6" onclick="nextQuestion6()"><strong>Avançar</strong></button>
        </div>
        <div id="Barb">
        <div id="question6BA" style="display:none">
            <span>6-> Você tem fácil acesso para trabalhar em<strong> JUAZEIRO DO<BR>NORTE - CE</strong>?*</span>
            <br>
            <p><span>Nosso escritório fica próximo ao Cariri Garden Shopping.</span></p>
        <input type="checkbox" value="S" id="FaS">Sim <br>
        <input type="checkbox" value="N" id="FaN">Não
            <p><button id="avançar6" onclick="nextQuestion6()"><strong>Avançar</strong></button>
        </div>

        <div id="question7B" style="display:none">
            <span>7-> Você aceita trabalhar presencialmente em nosso <BR><strong>ESCRITÓRIO</strong>?*</span>
            <br>
        <input type="checkbox" value="S">Sim <br>
        <input type="checkbox" value="N">Não
            <p><button id="avançar6" onclick="nextQuestion7()"><strong>Avançar</strong></button>
        </div>

        <div id="question8B" style="display:none">
            <span>8-> Você aceita trabalhar no <strong>MODELO HÍBRIDO</strong> (home office /<br>escritório)?*</span>
            <br>
        <input type="checkbox" value="BaS">Sim <br>
        <input type="checkbox" value="BaN">Não
            <p><button id="avançar6" onclick="nextQuestion6()"><strong>Avançar</strong></button>
        </div>

        <div id="question12B" style="display:none">
        <span>12-> Qual<strong> ÁREA</strong> que deseja se candidatar?*</span>    
        <br>
                <div style="color:red">
                    <input type="checkbox" value="Produto & Tecnologia" id="ProdTec">Produto & Tecnologia <br>
                    <input type="checkbox" value="Marketing & Vendas" id="markVend">Marketing & Vendas <br>
                    <input type="checkbox" value="Pessoas & Operação" id="PessOper">Pessoas & Operação
                </div>
            <p><button id="avançar18" onclick="nextQuestionAtuacao()"><strong>Avançar</strong></button>
        </div> 

</div>       
      
<div id="question6SM" style="display:none">
            <span>6-> Você aceita trabalhar no <strong>MODELO HÍBRIDO</strong> (home office /<br>escritório)?*</span>
            <br>
        <input type="checkbox" value="S">Sim <br>
        <input type="checkbox" value="N">Não
            <p><button id="avançar6" onclick="nextQuestion6()"><strong>Avançar</strong></button>
        </div>

        <div id="qt7" style="display:none  ">
            <span>7-> Você aceita trabalhar no <strong>MODELO HÍBRIDO </strong>(home office / <br>escritório)?*</span>
            <br>
        <input type="checkbox" value="S">Sim <br>
        <input type="checkbox" value="N">Não
            <p><button id="avançar7" onclick="nextQuestion7()"><strong>Avançar</strong></button>
        </div>

        <div id="qt8" style="display:NONE">
            <span>8-> Você aceita trabalhar <strong>MEIO PERÍODO</strong>?*</span>
            <br>
        <input type="checkbox" value="S">Sim <br>
        <input type="checkbox" value="N">Não
            <p><button id="avançar8" onclick="nextQuestion8()"><strong>Avançar</strong></button>
        </div>    

        <div id="qt9" style="display:NONE">
            <span>9-> Você possui <strong>COMPUTADOR</strong>?*</span>
            <br>
        <input type="checkbox" value="S">Sim <br>
        <input type="checkbox" value="N">Não
            <p><button id="avançar9" onclick="nextQuestion9()"><strong>Avançar</strong></button>
        </div>   

        <div id="qt10" style="display:NONE">
            <span>10-> Você possui <strong>SMARTPHONE</strong>?*</span>
            <br>
        <input type="checkbox" value="S">Sim <br>
        <input type="checkbox" value="N">Não
            <p><button id="avançar10" onclick="nextQuestion10()"><strong>Avançar</strong></button>
        </div>

        <div id="qt11" style="display:NONE">
            <span>11-> Você possui<strong> EXPERIÊNCIA PROFISSIONAL</strong>?*</span>
            <br>
        <input type="checkbox" value="S" id="S">Sim <br>
        <input type="checkbox" value="N" id="N">Não
            <p><button id="avançar11" onclick="nextQuestion11()"><strong>Avançar</strong></button>
        </div>   

        <div id="qt12" style="display:NONE">
            <span>12-> Você <strong>TRABALHA </strong>atualmente?*</span>
            <br>
        <input type="checkbox" value="S" id="S12">Sim <br>
        <input type="checkbox" value="N" id="N12">Não
            <p><button id="avançar12" onclick="nextQuestion12()"><strong>Avançar</strong></button>
         </div>   

         <div id="qt13N" style="display:NONE">
         <span>13-> Você sabe oque é <strong>PARTNERSHIP</strong>?*</span>
            <br>
        <input type="checkbox" value="S13b">Sim <br>
        <input type="checkbox" value="N13b">Não
            <p><button id="avançar13" onclick="nextQuestion13()"><strong>Avançar</strong></button>
        </div>   

        <div id="qt14N" style="display:NONE">
        <span>14-> Você já concluiu o <strong>ENSINO MÉDIO TÉCNICO?*</strong></span>
            <br>
        <input type="checkbox" value="S" id="S14b">Sim <br>
        <input type="checkbox" value="N"id="N14b">Não
            <p><button id="avançar13" onclick="nextQuestion14()"><strong>Avançar</strong></button>
            
        </div> 
        <div id="qt15S" style="display:NONE">
            <span>15-> Qual<strong> ESCOLA</strong> estudou?*</span>
            <br>
                <div style="color:red">
                <input type="text" placeholder="Responda aqui..."> <br>
                </div>
            <p><button id="avançar15" onclick="QuestionEscola()"><strong>Avançar</strong></button>
        </div>

        <div id="qt15N" style="display:NONE">
            <span>15-> Qual<strong> ESCOLA</strong> estuda?*</span>
            <br>
                <div style="color:red">
                <input type="text" placeholder="Responda aqui..."> <br>
                </div>
            <p><button id="avançar15" onclick="QuestionEscola()"><strong>Avançar</strong></button>
        </div> 

        <div id="qt16Curso" style="display:NONE">
            <span>16-> Qual<strong> CURSO</strong> fez?*</span>
            <br>
                <div style="color:red">
                    <input type="text" placeholder="Responda aqui..."> <br>
                </div>
            <p><button id="avançar15" onclick="questionCurso()"><strong>Avançar</strong></button>
        </div>   

        <div id="qt17Grad" style="display:NONE">
            <span>17-> Você já concluiu a <strong>GRADUAÇÃO</strong>?*</span>
            <br>
                <div style="color:red">
                <input type="checkbox" value="S" ID="Sg">Sim <br>
                <input type="checkbox" value="N"id="Ng">Não
                </div>
            <p><button id="avançar15" onclick="questionGraduacao()"><strong>Avançar</strong></button>
        </div>  

        
        <div id="qt18FaculS" style="display:NONE">
            <span>18-> Qual<strong> FACULDADE</strong> estudou?*</span>
            <br>    
                <div style="color:red">
                    <input type="text" placeholder="Responda aqui..."><br>
                </div>
            <p><button id="avançar21" onclick="QuestionFacul()"><strong>Avançar</strong></button>
        </div>

        <div id="qt18FaculN" style="display:NONE">
            <span>18-> Qual<strong> FACULDADE</strong> estuda?*</span>
            <br>
                <div style="color:red">
                    <input type="text"  placeholder="Responda aqui..."><br>
                </div>
            <p><button id="avançar21" onclick="QuestionFacul()"><strong>Avançar</strong></button>
        </div>

        <div id="qt19CursoFac" style="display:NONE">
            <span>19-> Qual<strong> CURSO</strong> fez?*</span>
            <br>
                <div style="color:red">
                    <input type="text" placeholder="Responda aqui..."> <br>
                </div>
            <p><button id="avançar15" onclick="question16B()"><strong>Avançar</strong></button>
        </div>
        
        <div id="qt20Fac" style="display:NONE">
            <span>20-> Você possui alguma outra<strong> FORMAÇÃO E CURSOS</strong> estuda?*</span>
            <P>Em nossa cultura empresarial prezamos pela educação contínua e<br>
            multidisciplinar. No tempo em que estamos, o conhecimento não está <br>
            apenas no modelo de escola tradicional. Respeitamos plataformas <br>
            como Udemy e Youtube porém valorizamos quem consegue concluir <br>
            uma jornada tracidional de ensino.
            <p>
                <input type="text" placeholder="Responda aqui..."><br>
                <span>Carregar com <strong>Shift + Enter</strong> para fazer uma quebra de linha</span>
            </p>
            <p><button id="avançarqtForm" onclick="nextQuestionArea()"><strong>Avançar</strong></button>
        </div>         

        <div id="qt21fac" style="display:none">
            <span>21-> Qual<strong> ÁREA</strong> que deseja se candidatar?*</span>
            <br>
                <div style="color:red">
                    <input type="checkbox" value="Produto & Tecnologia" id="ProdTec21">Produto & Tecnologia <br>
                    <input type="checkbox" value="Marketing & Vendas" id="markVend21">Marketing & Vendas <br>
                    <input type="checkbox" value="Pessoas & Operação" id="PessOper21">Pessoas & Operação
                </div>
            <p><button id="avançar18" onclick="nextQuestionAtuacao()"><strong>Avançar</strong></button>
        </div> 

        <div id="qt22ProdTec" style="display:NONE">
        <span>22-> Qual área de <strong>PRODUTOS E TECNOLOGIA</strong> que deseja se</span><BR>
            candidatar?*
                <div style="color:red">
                    <input type="checkbox" value="A" id="Back-end">Back-end
                    <input type="checkbox" value="B" id="Front-end">Front-end
                    <input type="checkbox" value="C" id="Cloud">Cloud <br>
                    <input type="checkbox" value="D" id="Full Stack">Full Stack
                    <input type="checkbox" value="E" id="Design">Design
                </div>
            <p><button id="avançar18" onclick="nextQuestionprodtec()"><strong>Avançar</strong></button>
        </div> 
        
        <div id="qt22MarkVend" style="display:none">
            <span>22-> Qual área de <strong>MARKETING E VENDAS</strong> que deseja se</span><BR>
            candidatar?*
            <br>
                <div style="color:red">
                    <input type="checkbox" value="Produto & Tecnologia" id="ProdTec">Copywriter
                    <input type="checkbox" value="Marketing & Vendas" id="markVend">Social Media <br>
                    <input type="checkbox" value="Pessoas & Operação" id="PessOper">Performance
                    <input type="checkbox" value="Pessoas & Operação" id="PessOper">Insade Sales<br>
                    <input type="checkbox" value="Pessoas & Operação" id="PessOper">Outbound Sales
                    <input type="checkbox" value="Pessoas & Operação" id="PessOper">Key Account<br>
                    <input type="checkbox" value="Pessoas & Operação" id="PessOper">Business Development
                </div>
            <p><button id="avançar18" onclick="nextQuestionMarkVend()"><strong>Avançar</strong></button>
        </div> 

        <div id="qt22OpPess" style="display:none">
            <span>22-> Qual área de<strong> OPERAÇÃO & PESSOAS</strong> que deseja se<BR>candidatar?*</span>
            <br>
                <div style="color:red">
                    <input type="checkbox" value="Financeiro & Contábil" id="Financeiro & Contábil">Financeiro & Contábil
                    <input type="checkbox" value="Pessoas & Cultura" id="Pessoas & Cultura">Pessoas & Cultura<br>
                    <input type="checkbox" value="Jurídico" id="Jurídico">Jurídico
                </div>
            <p><button id="avançar18" onclick="nextQuestionOpPess()"><strong>Avançar</strong></button>
        </div> 


        <div id="qt23niv" style="display:none">
            <span>23-> Qual <strong>NÍVEL PROFISSIONAL</strong> você se considera?<BR>Quanto tempo trabalho em uma empresa</span>
            <div style="color:red"><p>Pode selecionar várias opções</p></div>
            <br>
                <div style="color:red">
                    <input type="checkbox" value="Aprendiz" id="Aprendiz">Aprendiz
                    <input type="checkbox" value="Júnior" id="Júnior">Júnior<br>
                    <input type="checkbox" value="Pleno" id="Pleno">Pleno<br>
                    <input type="checkbox" value="Sênior" id="Sênior">Sênior<br>
                    <input type="checkbox" value="Especialista" id="Especialista">Especialista<br>
                    <input type="checkbox" value="Gestor" name="F" id="Gestor">Gestor<br>
                </div>
            <p><button id="avançar18" onclick="nextQuestionTempo()"><strong>Avançar</strong></button>
        </div> 

                
        <div id="qt24Temp" style="display:none">
            <span>24-> Qanto tempo<strong> trabalho em uma empresa</strong></span>
            <div style="color:red"><p>Pode selecionar várias opções</p></div>
            <br>
                <div style="color:red">
                    <input type="checkbox" value="A" id="Aprendiz">Nenhuma experiência em empresa
                    <input type="checkbox" value="B" id="Júnior">Apenas trbalhei como freelancer<br>
                    <input type="checkbox" value="C" id="Pleno">Menos de um ano<br>
                    <input type="checkbox" value="D" id="Sênior">Até três anos<br>
                    <input type="checkbox" value="E" id="Especialista">Até cinco anos<br>
                    <input type="checkbox" value="F" name="F" id="Gestor">Até dez anos<br>
                    <input type="checkbox" value="G" name="F" id="Gestor">Até vinte anos<br>
                </div>
            <p><button id="avançar18" onclick="nextQuestionIngles()"><strong>Avançar</strong></button>
        </div> 

        <div id="qt25Ing" style="display:NONE">
            <span>25-> Possui conhecimento de <strong>INGLÊS</strong>?*</span>
            <br>
                <div style="color:red">
                <input type="checkbox" value="S" ID="S">Sim <br>
                <input type="checkbox" value="N"id="N">Não
                </div>
            <p><button id="avançar25" onclick="questionnvIngles()"><strong>Avançar</strong></button>
        </div>

        <div id="qt26Cont" style="display:NONE">
            <span>26-> Qual<strong> MODELO DE CONTRATAÇÃO</strong> você prefere ser<br>contratado?*</span>
            <br>
            <div style="color:red">
                    <input type="checkbox" value="A" id="CLT">CLT
                    <input type="checkbox" value="B" id="PJ">PJ<br>
                    <input type="checkbox" value="C" id="estágio">Contrato Estágio<br>
                    <input type="checkbox" value="D" id="aprendiz">Contrato Aprendiz<br>
                    
                </div>
            <p><button id="avançar18" onclick="QuestionModCont()"><strong>Avançar</strong></button>
        </div>

        <div id="qt27Curr" style="display:NONE">
            <span>27-> Anexar o<strong> CURRÍCULO</strong> no formato PDF.<br></span>
            <br>
            <div style="color:red">
                    <input type="arquivo" value="curriculo" id="curriculo">
                    
                </div>
            <p><button id="avançar18" onclick="QuestionCurr()"><strong>Avançar</strong></button>
        </div>
       
        <div id="qt28port" style="display:NONE">
            <span>28-> Anexar o<strong> PORTIFÓLIO</strong> no formato PDF.<br>
                        Mesmo que não seja um designer, se quiser incluir uma apresentação<br>dos projetos que realizou, será um diferencial</span>
            <br>
            <div style="color:red">
                    <input type="arquivo" value="portifolio" id="portifolio">
                    
                </div>
            <p><button id="avançar18" onclick="QuestionCurr()"><strong>Avançar</strong></button>
        </div>

        <div id="qt29bol" style="display:NONE">
            <span>29-> Anexar o<strong> BOLETIM</strong> no formato PDF.<br>
                        Enviar apenas se ainda estiver estudando.</span>
            <br>
            <div style="color:red">
                    <input type="arquivo" value="Boletim" id="boletim">
                    
                </div>
            <p><button id="avançar18" onclick="QuestionBoletim()"><strong>Avançar</strong></button>
        </div>

        
        <div id="qt30duv" style="display:NONE">
            <span>30-> Você tem alguma <strong>DÚVIDA</strong>?*<br></span>
            <br>
            <div style="color:red">

                <input type="checkbox" value="S" ID="S">Sim <br>
                <input type="checkbox" value="N"id="N">Não
                    
                </div>
            <p><button id="avançar18" onclick="QuestionDuvida()"><strong>Avançar</strong></button>
        </div>

        <div id="qt26Ings" style="display:NONE">
            <span>26-> Qual é o seu <strong>NIVEL</strong> de inglês?*</span>
            <br>
            <div style="color:red">
                    <input type="checkbox" value="A" id="Técnico">Técnico
                    <input type="checkbox" value="B" id="Google Translator">Google Translator<br>
                    <input type="checkbox" value="C" id="Consigo">Consigo me comunicar com certa dificuldade<br>
                    <input type="checkbox" value="D" id="pronto">Pronto para viajar para Miami e voltar com um contrato assinado<br>
                    <input type="checkbox" value="E" id="Especialista">Até cinco anos<br>
                    
                </div>
            <p><button id="avançar18" onclick="QuestionModCont()"><strong>Avançar</strong></button>
        </div>

        <div id="qt27Cont" style="display:NONE">
            <span>27-> Qual<strong> MODELO DE CONTRATAÇÃO</strong> você prefere ser<br>contratado?*</span>
            <br>
            <div style="color:red">
                    <input type="checkbox" value="A" id="CLT">CLT
                    <input type="checkbox" value="B" id="PJ">PJ<br>
                    <input type="checkbox" value="C" id="estágio">Contrato Estágio<br>
                    <input type="checkbox" value="D" id="aprendiz">Contrato Aprendiz<br>
                    
                </div>
            <p><button id="avançar18" onclick="QuestionCurr()"><strong>Avançar</strong></button>
        </div>

        <div id="qt28Curr" style="display:NONE">
            <span>28-> Anexar o<strong> CURRÍCULO</strong> no formato PDF.<br></span>
            <br>
            <div style="color:red">
                    <input type="arquivo" value="curriculo" id="curriculo">
                    
                </div>
            <p><button id="avançar18" onclick="QuestionModCont()"><strong>Avançar</strong></button>
        </div>
       
        <div id="qt16B" style="display:NONE">
            <span>16-> Você possui alguma outra<strong> FORMAÇÃO E CURSOS</strong> estuda?*</span>
            <P>Em nossa cultura empresarial prezamos pela educação contínua e<br>
            multidisciplinar. No tempo em que estamos, o conhecimento não está <br>
            apenas no modelo de escola tradicional. Respeitamos plataformas <br>
            como Udemy e Youtube porém valorizamos quem consegue concluir <br>
            uma jornada tracidional de ensino.
            <p>
                <input type="text" placeholder="Responda aqui..."><br>
                <span>Carregar com <strong>Shift + Enter</strong> para fazer uma quebra de linha</span>
            </p>
            <p><button id="avançarqtForm" onclick="nextQuestionArea()"><strong>Avançar</strong></button>
        </div>
        


        <div id="qt13" style="display:NONE">
            <span>13-> Você recebe algum<strong> BENEFÍCIO</strong>?*</span>
            <br>
        <input type="checkbox" value="S">Sim <br>
        <input type="checkbox" value="N">Não
            <p><button id="avançar13" onclick="nextQuestion13()"><strong>Avançar</strong></button>
        </div>   

        <div id="beneficio">
            <div id="qt14" style="display:none">
            <span>14-> Quais<strong> BENEFÍCIOS</strong> você possui?*</span><br>
            <p><span style = "color:red">Pode selecionar várias opções</span></p>
            <div style="color: Red" >
            <input type="checkbox" id="A" value="A"><label for="A">Vale Transporte</label> 
            <input type="checkbox"id="B" value="B"><label for="B">Assistência Odontológica<br>
            <input type="checkbox" id="C" value="C"><label for="C">Bonûs Performance
                <input type="checkbox" id="D" value="D"><label for="D">Folga Aniversário<br>
            <input type="checkbox" id="E" value="E"><label for="E">Feriado Prolongado
                <input type="checkbox" id="F" value="F"><label for="F">Universidade Corporativa<br>
            <input type="checkbox"id="G" value="G"><label for="G">Vale Refeição
                <input type="checkbox"id="H" value="H"><label for="H">Programa de Partnership<br>
            <input type="checkbox"id="I" value="I"><label for="I">Previdência Privada
                <input type="checkbox"id="J" value="J"><label for="J">Gympass<br>
            <input type="checkbox"id="K" value="K"><label for="K">Vale Alimentação
                <input type="checkbox"id="L" value="L"><label for="L">Assistência Médica<br>
            <input type="checkbox" id="M" value="M"><label for="M">Seguro de Vida
                <input type="checkbox"id="N" value="N"><label for="N">Home Office<br>
            <input type="checkbox"id="O" value="O"><label for="O">Outros<input type="text">
            <p><button id="avançar14" onclick="nextQuestion14()"><strong>Avançar</strong></button>
            </div>
            </div>

            <div id="qt15" style="display:NONE">
            <span>15-> Você acredita que uma empresa pode ter todos esses<strong>
                <br>BENEFÍCIOS</strong>para seu time?</span>
            <br>
                <div style="color:red">
                    <input type="checkbox" value="S">Sim <br>
                    <input type="checkbox" value="N">Não
                </div>
            <p><button id="avançar15" onclick="nextQuestion15()"><strong>Avançar</strong></button>
        </div>  
        
        <div id="qt16" style="display:NONE">
            <span>16-> Você sabe oque é <strong>PARTNERSHIP</strong>?*</span>
            <br>
                <div style="color:red">
                    <input type="checkbox" value="S">Sim <br>
                    <input type="checkbox" value="N">Não
                </div>
            <p><button id="avançar16" onclick="nextQuestion16()"><strong>Avançar</strong></button>
        </div> 

        <div id="qt17" style="display:NONE">
            <span>17-> Você já concluiu o <strong>ENSINO MÉDIO TÉCNICO?*</strong></span>
            <br>
                <div style="color:red">
                    <input type="checkbox" id="qt17S" value="S">Sim <br>
                    <input type="checkbox" id="qt17N" value="N">Não
                </div>
            <p><button id="avançar17" onclick="nextQuestion17()"><strong>Avançar</strong></button>
        </div> 

        <div id="qt18S" style="display:NONE">
            <span>18-> Qual<strong> ESCOLA</strong> estudou?*</span>
            <br>
                <div style="color:red">
                    <input type="checkbox" value="S">Sim <br>
                    <input type="checkbox" value="N">Não
                </div>
            <p><button id="avançar18" onclick="nextQuestion18()"><strong>Avançar</strong></button>
        </div> 

        <div id="qt18N" style="display:NONE">
            <span>18-> Qual<strong> ESCOLA</strong> estuda?*</span>
            <br>
                <div style="color:red">
                    <input type="text" placeholder="Responda aqui..."> <br>
                </div>
            <p><button id="avançar18" onclick="questionFormacao()"><strong>Avançar</strong></button>
        </div> 

        <div id="qtForm" style="display:NONE">
            <span>19-> Você possui alguma outra<strong> FORMAÇÃO E CURSOS</strong> estuda?*</span>
            <P>Em nossa cultura empresarial prezamos pela educação contínua e<br>
            multidisciplinar. No tempo em que estamos, o conhecimento não está <br>
            apenas no modelo de escola tradicional. Respeitamos plataformas <br>
            como Udemy e Youtube porém valorizamos quem consegue concluir <br>
            uma jornada tracidional de ensino.
            <p>
                <input type="text" placeholder="Responda aqui..."><br>
                <span>Carregar com <strong>Shift + Enter</strong> para fazer uma quebra de linha</span>
            </p>
            <p><button id="avançarqtForm" onclick="nextQuestionArea()"><strong>Avançar</strong></button>
        </div> 

        <div id="AreaCand" style="display:none">
            <span>20-> Qual<strong> ÁREA</strong> que deseja se candidatar?*</span>
            <br>
                <div style="color:red">
                    <input type="checkbox" value="Produto & Tecnologia" id="ProdTec">Produto & Tecnologia <br>
                    <input type="checkbox" value="Marketing & Vendas" id="markVend">Marketing & Vendas <br>
                    <input type="checkbox" value="Pessoas & Operação" id="PessOper">Pessoas & Operação
                </div>
            <p><button id="avançar18" onclick="nextQuestionAtuacao()"><strong>Avançar</strong></button>
        </div> 
        
        <div id="areaProdTec" style="display:NONE">
        <span>20-> Qual área de <strong>PRODUTOS E TECNOLOGIA</strong> que deseja se</span><BR>
            candidatar?*
                <div style="color:red">
                    <input type="checkbox" value="A" id="Back-end">Back-end
                    <input type="checkbox" value="B" id="Front-end">Front-end
                    <input type="checkbox" value="C" id="Cloud">Cloud <br>
                    <input type="checkbox" value="D" id="Full Stack">Full Stack
                    <input type="checkbox" value="E" id="Design">Design
                </div>
            <p><button id="avançar18" onclick="nextQuestionAtuacao()"><strong>Avançar</strong></button>
        </div> 
        
        <div id="AreaMark" style="display:none">
            <span>21-> Qual área de <strong>MARKETING E VENDAS</strong> que deseja se</span><BR>
            candidatar?*
            <br>
                <div style="color:red">
                    <input type="checkbox" value="Produto & Tecnologia" id="ProdTec">Copywriter
                    <input type="checkbox" value="Marketing & Vendas" id="markVend">Social Media <br>
                    <input type="checkbox" value="Pessoas & Operação" id="PessOper">Performance
                    <input type="checkbox" value="Pessoas & Operação" id="PessOper">Insade Sales<br>
                    <input type="checkbox" value="Pessoas & Operação" id="PessOper">Outbound Sales
                    <input type="checkbox" value="Pessoas & Operação" id="PessOper">Key Account<br>
                    <input type="checkbox" value="Pessoas & Operação" id="PessOper">Business Development
                </div>
            <p><button id="avançar18" onclick="nextQuestionAtuacao()"><strong>Avançar</strong></button>
        </div> 

        <div id="AreaPessoasOp" style="display:none">
            <span>21-> Qual<strong> OPERAÇÃO & PESSOAS</strong> que deseja se<BR>candidatar?*</span>
            <br>
                <div style="color:red">
                    <input type="checkbox" value="Financeiro & Contábil" id="Financeiro & Contábil">Financeiro & Contábil
                    <input type="checkbox" value="Pessoas & Cultura" id="Pessoas & Cultura">Pessoas & Cultura<br>
                    <input type="checkbox" value="Jurídico" id="Jurídico">Jurídico
                </div>
            <p><button id="avançar18" onclick="nextQuestionAtuacao()"><strong>Avançar</strong></button>
        </div> 
        

        <div id="qt19" style="display:NONE">
            <span>19-> Qual<strong> CURSO</strong> fez?*</span>
            <br>
                <div style="color:red">
                    <input type="text" value="" placeholder="Responda aqui..."><br>
                </div>
            <p><button id="avançar19" onclick="nextQuestion19()"><strong>Avançar</strong></button>
        </div>

        <div id="qt20" style="display:none">
            <span>20-> Você já concluiu a <strong>GRADUAÇÃO</strong>?*</span>
                <p><div style="color:red">
                    <input name="qt20S" id="qt20S" class="qt20" type="checkbox" value="S"><label for="qt20S" >Sim</label> <br>
                    <input name="qt20N" id="qt20N" class="qt20" type="checkbox" value="N"><label for="qt20N">Não</label>
                    </p></div>
            <p><input id="avançar20" name="avancar20" value="Avançar" type="button" onclick="nextQuestion20()">
        </div>
        <div id="qt21" style="display:NONE">
            <span>21-> Qual<strong> FACULDADE</strong> estudou?*</span>
            <br>    
                <div style="color:red">
                    <input type="text" placeholder="Responda aqui..."><br>
                </div>
            <p><button id="avançar21" onclick="nextQuestion21()"><strong>Avançar</strong></button>
        </div>

        <div id="qt21N" style="display:NONE">
            <span>21-> Qual<strong> FACULDADE</strong> estuda?*</span>
            <br>
                <div style="color:red">
                    <input type="text"  placeholder="Responda aqui..."><br>
                </div>
            <p><button id="avançar21" onclick="nextQuestion21()"><strong>Avançar</strong></button>
        </div>
        </div> 




   
     <script src="perguntas.js"></script>
     <button id="anterior" onclick="proximo()"><</button>
    <button id="proximo" onclick="anterior()">></button>
</div>
</body>
</html>