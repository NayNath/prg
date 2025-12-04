<?php
require_once "Personagens.php";
class Zumbi extends Personagens{
    public $forca = 90; 
    public $defesa = 90; 
    public $esquiva = 30;
    public $velocidade = 30;
    public $inteligencia = 00;
    public $vida = 240;
    public $img = 'zumbi';
    public $descricao = 'Um morto-vivo reanimado, que se move lentamente, mas é implacável em sua busca por carne fresca.';

    public function ataqueEspecial(){
        echo 'Come cérebro (50)<br>';
        echo 'Gosma ácida (70)';
    }
}

?>