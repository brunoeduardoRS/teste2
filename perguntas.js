
        const question3 = document.getElementById('question 3');
        const question1 = document.getElementById('question 1');
        const question2 = document.getElementById('question 2');
        const question4 = document.getElementById('question 4');
        const question5 = document.getElementById('question 5');
        const question6 = document.getElementById('question 6');
        const question7 = document.getElementById('qt7');
        const question8 = document.getElementById('qt8');
        const question9 = document.getElementById('qt9');
        const question10 = document.getElementById('qt10');
        const question11 = document.getElementById('qt11');
        const question12 = document.getElementById('qt12');
        const question13 = document.getElementById('qt13');
        const question14 = document.getElementById('qt14');
        const question15 = document.getElementById('qt15');
        const question16 = document.getElementById('qt16');
        const question17 = document.getElementById('qt17');
        const question18 = document.getElementById('qt18');
        const question19 = document.getElementById('qt19');
        const question20 = document.getElementById('qt20');
        const question21 = document.getElementById('qt21');
        const question22 = document.getElementById('qt22');
        const question23 = document.getElementById('qt23');
        const question24 = document.getElementById('qt24');
        const question25 = document.getElementById('qt25');

        jQuery(document.body).on('keypress', function (e) {
            if (e.keyCode === 13) {
                e.preventDefault();
                    $("#avançar").trigger("click");
                    }   
                }); 
            


        function nextQuestion() {   
            //deveria adicionar um if dentro da função para verficar qual questão correta para mostrar
            
            question2.style.display="block";
            question1.style.display="none";

            

        jQuery(document.body).on('keypress', function (e) {
            if (e.keyCode === 13) {
                e.preventDefault();
                    $("#avançar").trigger("click");
                    }
                }); 
        }

        function nextQuestion2() {   
            //deveria adicionar um if dentro da função para verficar qual questão correta para mostrar
            
            
            
            question2.style.display="none";
            question3.style.display="block";

             

        jQuery(document.body).on('keypress', function (e) {
            if (e.keyCode === 13) {
                e.preventDefault();
                    $("#avançar2").trigger("click");
                    }
                }); 
        }

        function nextQuestion3() {   
            //deveria adicionar um if dentro da função para verficar qual questão correta para mostrar
            
            
            
            question3.style.display="none";
            question4.style.display="block";

           

        jQuery(document.body).on('keypress', function (e) {
            if (e.keyCode === 13) {
                e.preventDefault();
                    $("#avançar3").trigger("click");
                    }
                }); 
        }

        function nextQuestion4() {   
            //deveria adicionar um if dentro da função para verficar qual questão correta para mostrar

            
            question4.style.display="none";
            question5.style.display="block";
            
            
           

        jQuery(document.body).on('keypress', function (e) {
            if (e.keyCode === 13) {
                e.preventDefault();
                    $("#avançar4").trigger("click");
                    }
                }); 

        }

        function nextQuestion5() {   
            //deveria adicionar um if dentro da função para verficar qual questão correta para mostrar
            question5.style.display="none";
               
                    
                    if ($('#JN').is(':checked')) {
                        $('#question6').css('display', 'block');
                        $('#question 5').css('display', 'none');
                        
                    }
                    
                    if ($('#Ba').is(':checked')) {
                        $('#question6BA').css('display', 'block');
                    }
                    
                    if ($('#Cr').is(':checked')) {
                        $('#question6BA').css('display', 'block');
                    }
        
                    if ($('#Mi').is(':checked')) {
                        $('#question6SM').css('display', 'block');
                        
                    }
        
                    if ($('#SP').is(':checked')) {
                        $('#question6SM').css('display', 'block');
                        
                    }


        }

        function nextQuestion6() {   
            //deveria adicionar um if dentro da função para verficar qual questão correta para mostrar

            
            jQuery(document.body).on('keypress', function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                        $("#avançar7").trigger("click");
                        }
                    });              

                    if ($('#FaS').is(':checked')) {
                        $('#question7B').css('display', 'block');
                        $('#question6BA').css('display', 'none');
                        
                    }else{
                        $('#qt7').css('display', 'block');
                        $('#question6BA').css('display', 'none');
                    }

        }
        function nextQuestion7() {   
            //deveria adicionar um if dentro da função para verficar qual questão correta para mostrar
           
            jQuery(document.body).on('keypress', function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                        $("#avançar8").trigger("click");
                        }
                    }); 

            question8.style.display="block";
            $('#qt7').css('display', 'none');
            $('#question7B').css('display', 'none');

                        

        }
        function nextQuestion8() {   
            //deveria adicionar um if dentro da função para verficar qual questão correta para mostrar

            
            question8.style.display="none";
            question9.style.display="block";
            
            jQuery(document.body).on('keypress', function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                        $("#avançar9").trigger("click");
                        }
                    });              


        }
        function nextQuestion9() {   
            //deveria adicionar um if dentro da função para verficar qual questão correta para mostrar

            
            question9.style.display="none";
            question10.style.display="block";
            
            jQuery(document.body).on('keypress', function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                        $("#avançar10").trigger("click");
                        }
                    });              


        }
        function nextQuestion10() {   
            //deveria adicionar um if dentro da função para verficar qual questão correta para mostrar

            
            question10.style.display="none";
            question11.style.display="block";
            
            jQuery(document.body).on('keypress', function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                        $("#avançar11").trigger("click");
                        }
                    });              


        }
        function nextQuestion11() {   
            //deveria adicionar um if dentro da função para verficar qual questão correta para mostrar

            question11.style.display="none";

            jQuery(document.body).on('keypress', function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                        $("#avançar12").trigger("click");
                        }
                    }); 
                    
                    if ($('#S').is(':checked')) {
                        $('#qt12').css('display', 'block');
                        $('#question8B').css('display', 'none');
                        
                    }else{
                        $('#question12B').css('display', 'block');
                        $('#question8B').css('display', 'none');
                    }


        }
        function nextQuestion12() {   
            //deveria adicionar um if dentro da função para verficar qual questão correta para mostrar

            
            question12.style.display="none";
            
            jQuery(document.body).on('keypress', function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                        $("#avançar13").trigger("click");
                        }
                    });              

                    if ($('#S12').is(':checked')) {
                        $('#qt13').css('display', 'block');
    
                        
                    }else{
                        $('#qt13N').css('display', 'block');
                    }


        }
        function nextQuestion13() {   
            //deveria adicionar um if dentro da função para verficar qual questão correta para mostrar

            
            question13.style.display="none";
            
            jQuery(document.body).on('keypress', function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                        $("#avançar14").trigger("click");
                        }
                    });              

                    if ($('#S13b').is(':checked')) {
                        $('#qt14N').css('display', 'block');
                        $('#qt13N').css('display', 'none');    
                        
                    }else{
                        $('#qt14N').css('display', 'block');
                        $('#qt13N').css('display', 'none');
                    }




        }
        function nextQuestion14() {   
            //deveria adicionar um if dentro da função para verficar qual questão correta para mostrar

            $('#qt14N').css('display', 'none');
            question14.style.display="none";
            
            jQuery(document.body).on('keypress', function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                        $("#avançar15").trigger("click");
                        }
                    }); 

                    if ($('#S14b').is(':checked')) {
                        $('#qt15S').css('display', 'block');
                            
                        
                    }else{
                        $('#qt15N').css('display', 'block');
                    }


        }
        function nextQuestion15() {   
            //deveria adicionar um if dentro da função para verficar qual questão correta para mostrar

            
            question15.style.display="none";
            question16.style.display="block";
            
            jQuery(document.body).on('keypress', function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                        $("#avançar16").trigger("click");
                        }
                    });              


        }
        function question16B(){
            jQuery(document.body).on('keypress', function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                        $("#avançar17").trigger("click");
                        }
                    });              

                   if( $('#qt18CursoFac').css('display', 'block')){
                    $('#qt20Fac').css('display', 'block');
                    $('#qt19CursoFac').css('display', 'none');
                   }else{
                    $('#qt16B').css('display', 'block');
                    $('#qt15N').css('display', 'none');
                   }

        }

        function QuestionEscola(){
            jQuery(document.body).on('keypress', function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                        $("#avançar17").trigger("click");
                        }
                    });              
                    $('#qt15S').css('display', 'none');
                    $('#qt16Curso').css('display', 'block');


        }

        function questionCurso(){
            $('#qt16Curso').css('display', 'none');

            jQuery(document.body).on('keypress', function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                        $("#avançar17").trigger("click");
                        }
                    });              
                    $('#qt17Grad').css('display', 'block');                  
  
        }

        function questionGraduacao(){
            $('#qt17Grad').css('display', 'none');

            jQuery(document.body).on('keypress', function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                        $("#avançar17").trigger("click");
                        }
                    });              
                   
                    if ($('#Sg').is(':checked')) {
                        $('#qt18FaculS').css('display', 'block');
                        
                    }
                    else {
                        $("#qt18FaculN").css('display', 'block');
                    }

  
        }

        
        function QuestionFacul(){
            $('#qt18FaculS').css('display', 'none');
            $("#qt18FaculN").css('display', 'none');

            jQuery(document.body).on('keypress', function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                        $("#avançar17").trigger("click");
                        }
                    });              

                    $('#qt19CursoFac').css('display', 'block');


  
        }        


        function nextQuestion16() {   
            //deveria adicionar um if dentro da função para verficar qual questão correta para mostrar

            
            question16.style.display="none";
            question17.style.display="block";
            
            jQuery(document.body).on('keypress', function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                        $("#avançar17").trigger("click");
                        }
                    });              


        }
        function nextQuestion17() {   
            //deveria adicionar um if dentro da função para verficar qual questão correta para mostrar

            
            question17.style.display="none";
            
            jQuery(document.body).on('keypress', function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                        $("#avançar18").trigger("click");
                        }
                    });      
                    
                    if ($('#qt17S').is(':checked')) {
                        $('#qt18S').css('display', 'block');
                        $('#qt17').css('display', 'none');
                    }
                    else {
                        $("#qt18N").css('display', 'block');
                        $('#qt17').css('display', 'none');
                    }


        }
        function questionFormacao() {   
            //deveria adicionar um if dentro da função para verficar qual questão correta para mostrar

            const questionFormacao = document.getElementById("qtForm");
            const question18n = document.getElementById("qt18N");
            question18n.style.display="none";
            questionFormacao.style.display="block";
            
            jQuery(document.body).on('keypress', function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                        $("#avançar19").trigger("click");
                        }
                    });              


        }

        function nextQuestionArea() {   
            //deveria adicionar um if dentro da função para verficar qual questão correta para mostrar
            const questionForm = document.getElementById("qtForm");
            const areaCand = document.getElementById("AreaCand");
            

            
            
            jQuery(document.body).on('keypress', function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                        $("#avançar19").trigger("click");
                        }
                    });              

                    if($('#qt20Fac').css('display', 'block')){
                        $('#qt21fac').css('display', 'block');
                        $('#qt20Fac').css('display', 'none')
                    }else{
                        areaCand.style.display="block";
            questionForm.style.display="none";
                    }

        }

        function nextQuestionMarkVenda() {

            alert("oiii oi eu aqui ");
        if ( $('#AreaPessoasOp').css('display', 'block')) {
            $('#qt23niv').css('display', 'block');
            $('#AreaPessoasOp').css('display', 'none');    
        }else{
            $('#qt23niv').css('display', 'block');
            $('#AreaMark').css('display', 'none');    
        }
        
            
    }

    function nextQuestionOpPess(){
        if ( $('#qt22OpPess').css('display', 'block')) {
            $('#qt23niv').css('display', 'block');
            $('#qt22OpPess').css('display', 'none');    
        }else{
            $('#qt23niv').css('display', 'block');
            $('#qt22MarkVend').css('display', 'none');    
        }
    }

        function nextQuestionAtuacao() {   
            
            
            jQuery(document.body).on('keypress', function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                        $("#avançar19").trigger("click");
                        }
                    });    
                    
                    if ($('qt21fac').css('display','block')) {
                        
                        if ($('#ProdTec21').is(':checked')) {
                            $('#qt22ProdTec').css('display', 'block');
                            $('#qt21fac').css('display', 'none');
                        }
            
                        if ($('#markVend21').is(':checked')) {
                            $('#qt22MarkVend').css('display', 'block');
                            $('#qt21fac').css('display', 'none');
                        }
            
                        if ($('#PessOper21').is(':checked')) {
                            $('#qt22OpPess').css('display', 'block');
                            $('#qt21fac').css('display', 'none');
                        }    
                    }

                    if ($('#ProdTec').is(':checked')) {
                        $('#areaProdTec').css('display', 'block');
                        $('#AreaCand').css('display', 'none');
                    }
        
                    if ($('#markVend').is(':checked')) {
                        $('#AreaMark').css('display', 'block');
                        $('#AreaCand').css('display', 'none');
                    }
        
                    if ($('#PessOper').is(':checked')) {
                        $('#AreaPessoasOp').css('display', 'block');
                        $('#AreaCand').css('display', 'none');
                    }
        
        
                }



        function nextQuestion19() {   
            //deveria adicionar um if dentro da função para verficar qual questão correta para mostrar

            
            question19.style.display="none";
            question20.style.display="block";
            
            jQuery(document.body).on('keypress', function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                        $("#avançar20").trigger("click");
                        }
                    });              


        }

function nextQuestion20() {
    
           if ($('#qt20S').is(':checked')) {
            $('#qt21').css('display', 'block');
            $('#qt20').css('display', 'none');
        }
        else {
            $("#qt21N").css('display', 'block');
            $('#qt20').css('display', 'none');
        }
    };
        