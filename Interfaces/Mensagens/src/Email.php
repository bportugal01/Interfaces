<?php

namespace App\Src;

// Importa a interface IMensageiro para garantir que esta classe a implemente.
// Isso é importante para garantir consistência e padronização no código.
class Email implements IMensageiro {
    
    // Propriedade privada para armazenar a mensagem a ser enviada por e-mail.
    private $mensagem;

    // Método público para enviar uma mensagem por e-mail.
    // Recebe a mensagem como parâmetro e a imprime no formato de um e-mail.
    public function enviar($mensagem){
        echo "Enviando e-mail para: $mensagem\n";
    }

}