<?php

require __DIR__ . '../vendor/autoload.php';

use App\Src\Guerreiro;
use App\Src\Mago;
use App\Src\Arqueiro;
use App\Src\Personagem;

function executarAtaque(Personagem $personagem) {
    $personagem->atacar();
}

// Demonstração de polimorfismo
$guerreiro = new Guerreiro();
$mago = new Mago();
$arqueiro = new Arqueiro();

executarAtaque($guerreiro); // Saída: O Guerreiro ataca com sua espada!
executarAtaque($mago); // Saída: O Mago conjura uma bola de fogo!
executarAtaque($arqueiro); // Saída: O Arqueiro dispara uma flecha precisa!
