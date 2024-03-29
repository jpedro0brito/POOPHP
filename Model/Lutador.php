<?php
    class Lutador{
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;
        

        function Lutador($nome, $naci, $idade, $altura, $peso, $vitorias, $derrotas, $empates){
            $this->nome = $nome;
            $this->nacionalidade = $naci;
            $this->idade = $idade;
            $this->altura = $altura;
            $this->setPeso($peso);
            $this->vitorias = $vitorias;
            $this->derrotas = $derrotas;
            $this->empates = $empates;
        }

        function getNome(){
            return $this->nome;
        }
        function setNome($nome){
            $this->nome = $nome;
        }
        function getNacionalidade(){
            return $this->nacionalidade;
        }
        function setNacionalidade($naci){
            $this->nacionalidade = $naci;
        }
        function getIdade(){
            return $this->idade;
        }
        function setIdade($idade){
            $this->idade = $idade;
        }
        function getAltura(){
            return $this->altura;
        }
        function getPeso(){
            return $this->peso;
        }
        function setPeso($peso){
            $this->peso = $peso;
            $this->setCategoria();
        }
        private function setCategoria(){
            if($this->peso < 52.2){
                $this->categoria = "Invalido";
            }else if($this->peso <= 70.3){
                $this->categoria = "Leve";
            }else if($this->peso <=83.9){
                $this->categoria = "Medio";
            }else if($this->peso <= 120.0){
                $this->categoria = "Pesado";
            }else{
                $this->categoria =  "Invalido";
            }
        }
        function getCategoria(){
            return $this->categoria;
        }
        function getVitorias(){
            return $this->vitorias;
        }
        function setVitorias($vitorias){
            $this->vitorias = $vitorias;
        }
        function getDerrotas(){
            return $this->derrotas;
        }
        function setDerrotas($derrotas){
            $this->derrotas = $derrotas;
        }
        function getEmpates(){
            return $this->empates;
        }
        function setEmpates($empates){
            $this->empates = $empates;
        }


        function apresentar(){
            echo "<p>---------------------------------</p>";
            echo "<p>Nome: " . $this->getNome();
            echo "</br>Nacionalidade: " . $this->getNacionalidade();
            echo "</br>Idade: " . $this->getIdade();
            echo "</br>Peso: " . $this->getPeso();
            echo "</br>Vitorias: " . $this->getVitorias();
            echo "</br>Derrotas: " . $this->getDerrotas();
            echo "</br>Empates: " . $this->getEmpates();
            echo "</p>";
            echo "<p>---------------------------------</p>";
        }
        function status(){
            echo "<p>---------------------------------</p>";
            echo "<p>Nome: " . $this->getNome();
            echo "</br>Vitorias: " . $this->getVitorias();
            echo "</br>Derrotas: " . $this->getDerrotas();
            echo "</br>Empates: " . $this->getEmpates();
            echo "</p>";
            echo "<p>---------------------------------</p>";

        }
        function ganhaLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }
        function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }
        function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }
    }



?>