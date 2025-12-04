<?php
require_once "Personagens.php";
class Vampiro extends Personagens{
    public $forca = 80; 
    public $defesa = 50; 
    public $esquiva = 90;
    public $velocidade = 90;
    public $inteligencia = 50;
    public $vida = 90;
    public $img = 'vampiro';
    public $descricao = 'Uma majestosa criatura alada, capaz de cuspir fogo e com uma sabedoria ancestral, guardiã de tesouros.';

    public function ataqueEspecial(){
        echo 'Sangue suga (70)<br>';
        echo 'Dentes afiados (50)';
    }
}
?>