<?php
namespace App\Src;
class Tanque implements Personagem{
    public function atacar($habilidade, $mana){
        $classe = 'Tanque';
        $nome = 'Thor';
        $regiao = 'SHURIMA';

        echo "
        \n Classe: $classe
        \n Nome do Campeão: $nome
        \n Região: $regiao
        \n Habilidade: $habilidade
        \n Mana: $mana
        ";
    }
}