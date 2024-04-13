<?php

/*
 *--------------------------------------------------------------*
                    ESTRUTURA DE CONTROLE

    
    1-Condicionais (if, else,switch , else if):
        As estruturas condicionais são usadas para
        tomar decisões com base em  condições
        EXEMPLO: 
        $idade = 17;
            if($idade >= 18){   //se
                echo "voce e maior de idade"; //bloco a ser executado se a condição for verdadeira
            }
            else{   //se nao
                echo "voce e menor de idade" // se a condição for falsa
            }

            *impressao:*
            (voce e menor de idade)

        else if é uma condição a ser usada  para adicionar condições adicionias apos uma
        estrução if, permitindo varios testes de uma vez.
        EXEMPLO:
        $idade=17;
            if ($idade<16) {
                echo"nao vota"; // executa se essa condição for V
         }
            else if($idade >= 16 && $idade <18){
                 echo "voto opcional"; // executa se essa condição2 for V
        }
            else{
                 echo "voto obrigatorio"; // executa se nenhuma das condições anterior for V
    }

        *impressão*
        (voto opcional)

        a estrução switch é usada para selecionar uma das execuções de codigo
        com base em um valor de uma variavel

        EXEMPLO:
        $dia = "terça";
           //inicia a estrutura de controle(switch)
            switch (dia){ // o resultado dessa expressao "dia" sera comparado com os casos dentro do switch

                case "segunda": // define um caso dentro da estrutura , se for igual ao valor dado sera executado

                    echo "hoje e segunda";// codigo a ser executado se o valor for igual a "dia"

                    break;// usadao para sair do bloco de codigo caso a expressão por V , se não continuará executando ate achar
                case: "terca";
                    echo "hoje e terça";
                    break;
                default: //se nenhum dos casos corresponder ao valor da expressão
                    echo "dia nao conhecido";
            }

    
    2- Loops (for, while):
        Os loops são usados para executar
        um bloco de  código repetidamente enquanto uma condição for verdadeira
        o loop for é usado quando o número de iterações é conhecida antecipadamente
        


    

*/ 

?>