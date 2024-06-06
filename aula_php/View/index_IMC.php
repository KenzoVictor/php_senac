<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    
<form method="POST">
<div class="container">
  <div class="mb-3">
    <label for="altura" class="form-label">altura</label>
    <input type="number" step="0.01" required class="form-control" name="altura" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="peso" class="form-label">peso</label>
    <input type="number" step="0.01" required class="form-control" name="peso" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

</body>
</html>

<?php
    require "../Controller/Controller_IMC.php";
    
        
    if(isset($_POST["peso"]) && isset($_POST["altura"])){
        $imc = new Imc();
        $imc->peso = $_POST["peso"];
        $imc->altura = $_POST["altura"];

        $resultadoImc = $imc->CalcIMC();
        $classificacao = $imc->ClasseIMC();

        echo "O resultado do IMC é: ".$resultadoImc."<br>";
        echo "A classificação é: ".$classificacao;
    }
    
?>