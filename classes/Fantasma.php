<?php
require_once "Personagens.php";

class Fantasma extends Personagens{
    public $forca = 30; 
    public $defesa = 60; 
    public $esquiva = 100;
    public $velocidade = 100;
    public $inteligencia = 30;
    public $vida = 130;
    public $img = 'img/fantasma.php';
    public $descricao = 'Uma entidade etérea, que pode atravessar paredes e assombrar os vivos com sua presença sobrenatural.';

    public function ataqueEspecial(){
        echo 'Vulto sombrio (70)<br>';
        echo 'Garra da morte (50)';
    }
}

?>