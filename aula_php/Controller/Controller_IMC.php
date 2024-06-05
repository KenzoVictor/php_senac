<?php
    require "../Model/Model_IMC";

class Imc{
    public $peso = 0;
    public $altura = 0;
    private $imc = 0;

    public function calcIMC(){
        
        $this->imc = $this->peso / ($this->altura ** 2);
        return round($this->imc,2);



    }

    private function SalvarImc(){
        $modeloImc = new ModeloImc();

        return $modeloImc->Save($this->peso, $this->altura);
    }

    public function ClasseIMC(){
        if($this->imc <= 18.4){
        return "Abaixo do peso";
        } else if($this->imc <= 24.9){
        return "Peso normal";
        } else if($this->imc <= 29.9){
        return "Acima do peso";
        } else if($this->imc <= 34.9){
        return "Obesidade grau I";
        } else if($this->imc <= 40){
        return "Obesidade grau II";
        } else if($this->imc > 40){
        return "Obesidade grau III";
        } else {
        return "Error";
            }
        }
    }




?>