<?php

namespace App\Src;

// Importa a interface IMensageiro para garantir que esta classe a implemente.
// Isso é importante para garantir consistência e padronização no código.
class Whatsapp implements IMensageiro {
    
    // Propriedade privada para armazenar a mensagem a ser enviada via Whatsapp.
    private $mensagem;

    // Método público para enviar uma mensagem via Whatsapp.
    // Recebe a mensagem como parâmetro e a imprime no formato de uma mensagem via Whatsapp.
    public function enviar($mensagem){
        echo "Enviando mensagem via Whatsapp para: $mensagem\n";
    }

}