<?php
namespace App\Src;
class Bruxo implements Personagem{
    public function atacar($habilidade, $mana){
        $classe = 'Bruxo';
        $nome = 'Luiz';
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