<?php
namespace App\Src;
class Mago implements Personagem{
    public function atacar($habilidade, $mana){
        $classe = 'Mago';
        $nome = 'Fred';
        $regiao = 'RUNETERRA';

        echo "
        \n Classe: $classe
        \n Nome do Campeão: $nome
        \n Região: $regiao
        \n Habilidade: $habilidade
        \n Mana: $mana
        ";
    }
}