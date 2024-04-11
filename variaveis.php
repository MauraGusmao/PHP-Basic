<?php
    /* echo = comando escreva 
    EX: echo "Hello World";

    <br/> = pula uma linha
    echo " ola ,mundo <br/>";

    *----------------------------------------------------------------------------*
                                variáveis
    Todas as variaveis do php possuem um $ (int, float, bool, etc..) 
    no php nao existe declaracoes de variaveis, os tipos vao ser atribuidos
    automaticamente de acordo com o valor que a variavel receber
    conhecido como coerçao.
     

    ATENÇÃO : voce pode força um tipo primitivo a uma variavel por typecast
    para usar um tipo inteiro  posso usar = (int) ou (integer)
    para um tipo real = (real), (float) ou (double);
    para caractere = (string)
    valores logicos = nao é possovel usar o typecast, pois tipos logicos
    no php sao considerados inteiros.
    para valores verdadeiros é usado o numero um e para falso usa-se vazio
    true = 1
    false = vazio
    EX:
    $nome = (string)"Luis";

    *--------------------------------------------------------------------------------*
                                atribruição de valores

    para atribuir um valor, utilizamos um operador de atribuição = , alguns exemplos:
    $idade = 15;
    $salario = 1250.75      ;
    $nome = "Luis";
    $vendas = true;        
    
    *--------------------------------------------------------------------------------*
                            concatenação de valores
        
    para concatenar(juntar os valores), em PHP é usada pelo operador(.)

    EX:
     $idade = 20;
     $nome = "Ana";

     echo $nome. " tem" .$idade. "anos";
     
     resultado (Ana tem 20 anos)

     EX:
     echo "$nome tem $idade anos";
     um modo mais simplificado que nao tem problema de ser usado , contanto que 
     use aspas duplas.

     resultado (Ana tem 20 anos)
     

                                
    
    ?>
?>