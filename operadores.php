<?php
/*
   *--------------------------------------------------------------*
                    OPERADORES ARITMÉTICAS EM PHP


  fazer operaçoes aritméticas no php é bem simples ,vamos utilizar
  os operadores matematicos para isso.
  

  EX:
  $n1 = 5;
  $n2 = 2;
  $resultado;

  $resultado = $n1 * $n2;
  
  echo "A multiplicação entre $n1 e $n2 é igual a $resultado";

  codigo na tela (A multiplicação entre 5 e 2 é igual a  10)

  //assim com os outros operadores

  adicao($resultado = $n1 + $n2)
  subtração($resultado = $n1 - $n2)
  multiplicação($resultado = $n1 * $n2)
  divisao real ($resultado = $n1 / $n2)
  modulo($resultado = $n1 % $n2)

  Atenção : saber a importancia da ordem de precendência
  dos operadores em php, assim como muitas linguagens de programação.
  a regra coomum é : parênteses ()
  logo em seguida os operadores (/, *, %)
  por ultimo as adições e subtrações(+ , -)

  Alguns exemplos abaixo :

  $media = $n1 + $n2 / 2;
  echo "a media é". $media;
  (A media é 4)

  O resultado tem que ser 2.5 , mas foi calculado de maneira errada
  pois a segunda ordem de precedência, a divisão é feita antes
  logo o correto seria:
  $media = ($n1 + $n2) / 2;
  echo "A media é". $media;
  (A media é 2.5)

  *--------------------------------------------------------------*
                     FUNÇÕES MATEMÁTICAS

    No PHP tem varias funções matemáticas pré defenidas que são :

    abs() retorna o valor absoluto de um número
        Ex: abs(-5) = 5
    
    pow() calcula uma potencia
        Ex: pow(3,2) = 9

    sqrt() calcula a raiz quadrada de um numero
        EX: sqrt(25) = 5

    round() arredona valores
        EX: round(3.8) = 4

    ceil() arredonda um valor para cima
        EX: ceil(4.3) = 5

    
    ENTRE OUTRAS..

    *--------------------------------------------------------------*
                     OPERADORES DE ATRIBUIÇÃO


    Operadores de atribuição são usados para atribuir valor a variaveis


    EX:           Equivalente           Operação

    $a += $b      $a = $a + $b          Adição

    $a -= $b      $a = $a - $b          Subtração

    $a *= $b      $a = $a * $b          Multiplicação

    $a /= $b      $a = $a / $b          Divisão 

    $a %= $b      $a = $a % $b          Módulo

    $a .= $b      $a = $a . $b          Concatenação
    

    Operadores de Incremento/Decremento permitem aumentar ou diminuir 
    o valor por um

    EX:         Nome                    Efeito

    ++$a        pré-incremento          incrementa $a em um, e entao retorna $a

    $a++        pós-incremento          retorna $a, e entao incrementa $a em um

    --$a        pré-decremento          diminui $a em um , e então retorna $a

    $a--        pós-decremento          retorna $a, e entao diminui $a em um


    EXEMPLO EM CODIGO:
     $ano = 2024;
     echo "O ano atual e $ano e o ano anterior e " .$ano--;
     (o ano atual e 2024 e o ano anterior é 2024)

     Atencão : fiz um pós-decremento , e por isso aconteceu esse "erro" 
     para que meu codigo saia certo faço um pre-decremento.

     $ano = 2024;
     echo "O ano atual e $ano e o ano anterior e " .--$ano;
     (o ano atual e 2024 e o ano anterior e 2023)


    

    
    
    

   

*/

?>

