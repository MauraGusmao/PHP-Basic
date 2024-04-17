<?php
/*
*--------------------------------------------------------------*
                    FUNÇÕES

    
    Uma função é um bloco de código que executa uma tarefa
    específica e pode ser chamada/executada em difrentes partes
    de um programa.
    
  EXEMPLO:
    //definindo uma função chamada soma:
   function soma($a , $b){ 
        // recebendo seus parametros(argurmnetos) :$a , $b

     $s =$a+$b // corpo da função : vao conter instruções que serao executadas assim que a funçõa for chamada
                // calcula a soma dos dois parametros

     echo "a soma e $s"; //exibi a mensagem na tela com o resultado da soma
   }

   soma(3, 4); // chamando a função

   *IMPRESSÃO*
   a soma e 7

   essa função é chamada de função sem valor , ela é usada para realizar tarefas ou ações especificas
   sem a necessidade de retornar um valor. 
   Temos a função com retorno, que é usada quando  você precisa que a funçõa  produza um resultado
   específico que possa ser ultilizado em outras partes do  seu programa.

   //definindo uma função chamada soma:
    function soma($a , $b){ // recebendo seus parametros:  $a ,$b

        $s= $a+$b; //calcula a soma dos dois parametros que esta armazenado o resultado na variavel $s

        return $s; // retorna o resultado da soma
    }

    $res = soma (3 , 4); //chamando a função , o resultado da soma é atribuido á variavel $res.
   */
?>