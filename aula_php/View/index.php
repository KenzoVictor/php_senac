<?php
    $nome = "nome";
    $idade = "22";


    echo "Hello <strong>World</strong> ".$nome;

    if($idade >= 18){
        echo " de maior";
    } else if($idade < 18 && $idade > 0){
        echo " de menor";
    } else {
        echo " Error";
    }

    echo "<br>FOR: <br>";
    for($i = 0; $i < 10; $i++){
        echo $i;
    }

    $i = 0;
    echo "<br>WHILE: <br>";
    while($i < 10){
        echo $i;
        $i++;
    }

    echo "<br>";

    $dados = array(
        "1" => "filifin",
        "2" => "lugho"
    );

    foreach ($dados as $valor){
        echo $valor."<br>";
    }


?>