<?php

/*
 *--------------------------------------------------------------*
                    ESTRUTURA DE CONTROLE

    
    1-Condicionais (if, else):
        As estruturas condicionais são usadas para
        tomar decisões com base em  condições
        EXEMPLO: 
        $idade = 17;
            if($idade >= 18){   //se
                echo "voce e maior de idade";
            }
            else{   //se nao
                echo "voce e menor de idade"
            }

            *impressao:*
            (voce e menor de idade)

    
    2- Loops (for, while):
        Os loops são usados para executar
        um bloco de  código repetidamente enquanto uma condição for verdadeira



    

*/ 
$idade=17;
if ($idade<16) {
    echo"nao vota";
    # code...
}
else if($idade >= 16 && $idade <18){
    echo "voto op";
}
else{
    echo "voto ob";
}
?>