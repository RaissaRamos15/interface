<?php
namespace App\Src;
class Fada implements Personagem{
    public function atacar($habilidade, $mana){
        $classe = 'Fada';
        $nome = 'Blue';
        $regiao = 'FRELJORD';

        echo "
        \n Classe: $classe
        \n Nome do Campeão: $nome
        \n Região: $regiao
        \n Habilidade: $habilidade
        \n Mana: $mana
        ";
    }
}