<?php

abstract class Personagens{
    public $forca,$defesa,$esquiva,$velocidade,$inteligencia,$vida,$tipo,$classe,$img, $descricao;


    public function ataqueComum(){echo "Ataque Comum (20) <br>";}
    public function defesa(){echo "Defesa (50) <br>";}
    public function esquiva(){echo "Esquivar (60) <br>";}
    public function fugir(){echo "Fuga (-10) <br>";}


    function __set($atributo, $valor){ return $this->$atributo = $valor; }
    function __get($atributo){ return $this->$atributo; }
}
?>