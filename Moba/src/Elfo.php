<?php
namespace App\Src;
class Elfo implements Personagem{
    public function atacar($habilidade, $mana){
        $classe = 'Elfo';
        $nome = 'Just';
        $regiao = 'IONIA';

        echo "
        \n Classe: $classe
        \n Nome do Campeão: $nome
        \n Região: $regiao
        \n Habilidade: $habilidade
        \n Mana: $mana
        ";
    }
}