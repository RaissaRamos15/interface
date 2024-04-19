<?php
require 'vendor/autoload.php';
use App\Src\IMensageiro;
use App\Src\Email;
use App\Src\SMS;
use App\Src\Whatsapp;

$Whatsapp = new Whatsapp();
$Whatsapp->enviar("Rodriguin");

$SMS = new SMS();
$SMS->enviar("(+55) 11 94002-8922");

$Email = new Email();
$Email->enviar("jailson123@gmail.com");