<?php
namespace App\Src;
class Email implements IMensageiro {
    private $mensagem;

    public function enviar($mensagem){
        echo "Enviando mensagem via Email para: $mensagem\n";
    }

}