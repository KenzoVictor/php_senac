<?php
    require "../Controller/Controller_IMC.php";
    
    $imc = new Imc();
    

    $imc->peso = 75;
    $imc->altura = 1.70;

    $resultadoImc = $imc->CalcIMC();
    $classificacao = $imc->ClasseIMC();

    echo "O resultado do IMC é: ".$resultadoImc."<br>";
    echo "A classificação é: ".$classificacao;

?>