<?php
require 'vendor/autoload.php';
use App\Src\IMensageiro;
use App\Src\Email;
use App\Src\SMS;
use App\Src\Whatsapp;

$Whatsapp = new Whatsapp();
$Whatsapp->enviar("Mariano");

$SMS = new SMS();
$SMS->enviar("Carlos");

$Email = new Email();
$Email->enviar("Patricia");