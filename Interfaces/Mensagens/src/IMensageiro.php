<?php

namespace App\Src;

// Definição da interface IMensageiro.
// Uma interface é um contrato que define um conjunto de métodos que uma classe deve implementar.
interface IMensageiro{
    
    // Método de envio de mensagem.
    // Este método deve ser implementado por qualquer classe que implemente esta interface.
    // Recebe a mensagem como parâmetro.
    public function enviar($mensagem);
}
