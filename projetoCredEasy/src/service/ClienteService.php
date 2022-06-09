<?php

namespace br\com\sicredi\projetoCredEasy\service;

use br\com\sicredi\projetoCredEasy\modelo\Cliente;


class ClienteService {

    public function listaTodosOsClientes() {
        // consulta os clientes no banco de dados...

        $jessica = new Cliente("Jéssica", '007.795.810-16', 2525.00, 'Cidade Nova','Professora',985453048,
        'jessica_basaldivia@hotmail.com','senha123', 'cliente');
        //$marcos = new Cliente("Marcos", '222.222.222-22');
        //$matheuzinho = new Cliente("Matheus Dresch", '333.333.333-33');
        //$faria = new Cliente("Matheus Faria", '444.444.444-44');
        //$moises = new Cliente("Moisés", '555.555.555-55');
        //$vinicius = new Cliente("Vinícius", '666.666.666-66');

        $listaDeClientes = [
            $jessica->getCpf() => $jessica,
            //$marcos->getCpf() => $marcos,
            //$matheuzinho->getCpf() => $matheuzinho,
            //$faria->getCpf() => $faria,
            //$moises->getCpf() => $moises,
            //$vinicius->getCpf() => $vinicius,
        ];

        return $listaDeClientes;
    }

}

