<?php

namespace App\Src;

// Importa a interface IMensageiro para garantir que esta classe a implemente.
// Isso é importante para garantir consistência e padronização no código.
class SMS implements IMensageiro {
    
    // Propriedade privada para armazenar a mensagem a ser enviada via SMS.
    private $mensagem;

    // Método público para enviar uma mensagem via SMS.
    // Recebe a mensagem como parâmetro e a imprime no formato de uma mensagem SMS.
    public function enviar($mensagem){
        echo "Enviando mensagem via SMS para: $mensagem\n";
    }

}
