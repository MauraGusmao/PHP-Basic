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

            *impressão*
            (hoje e terça)

    
    2- Loops (for, while, do while):
        Os loops são usados para executar um bloco de  código 
        repetidamente enquanto uma condição for verdadeira

        o loop for é usado quando o número de iterações é conhecida antecipadamente

            for ($i = 0; $i < 5; $i++){ // no for vamos ter a inicializaçaõ ; condição ;incremento
                echo $i ."<br/>"; // codigo a ser executado
            }
            impressão (0 
                       1
                       2
                       3
                       4) 
           
        while é usado para quando o numero de iterações não é conhecido antecipadamente
            $contador = 0;
            while($contador < 5){ // contador é a condição , se o contatodor for menor que 5 o bloco é executado
                echo $contador . "<br/>"; //codigo a ser executado ser a codição for verdadeira
                $contador++; //  apos cada iteração o contador é incrementado em 1
            }   
            impressao (0
                       1
                       2
                       3
                       4)

        do while  é semelhante ao while , mas verifica a condição apos a execução do bloco do codigo ,garantindo que o bloco
        seja executado pelo menos uma vez
            $contador = 0;
            do{
                echo $contador ."<br/>" ; // o 'do' vai imprimir o valor atual e depois incrementa em 1
                $contador++
            }
            while ($contador < 5); // se a condição for V o bloco do 'do' é executado , se a condiçao for falsa o loop encerra , assim valendo para for , while.



    

*/ 

?>