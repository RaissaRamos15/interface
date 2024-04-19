<?php
require 'vendor/autoload.php';
use App\Src\Personagem;
use App\Src\Mago;
use App\Src\Bruxo;
use App\Src\Fada;
use App\Src\Elfo;
use App\Src\Suporte;
use App\Src\Tanque;

$Mago = new Mago();
$Mago->Atacar("Poção de Dano", "70");

$Lutador = new Bruxo();
$Lutador->Atacar("A Varinha Darkin", "Sem Custo");

$ADC = new Fada();
$ADC->Atacar("Flecha de Cristal Encantada", "100");

$Assasino = new Elfo();
$Assasino->Atacar("Golpe dos Cinco Pontos", "110");

$Suporte = new Suporte();
$Suporte->Atacar("Infusão Astral", "45");

$Tanque = new Tanque();
$Tanque->Atacar("A Maldição", "200");