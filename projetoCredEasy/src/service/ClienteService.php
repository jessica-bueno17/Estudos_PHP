<?php

namespace br\com\sicredi\projetoCredEasy\service;

use br\com\sicredi\projetoCredEasy\modelo\Cliente;


class ClienteService {

    public function listaTodosOsClientes(): array 
    {
        // consulta os clientes no banco de dados...

        $jessica = new Cliente("Jéssica", '007.795.810-16', 2525.00, 'Cidade Nova','Professora',985453048,
        'jessica_basaldivia@hotmail.com','senha123', 'cliente');

        $marcos = new Cliente("Marcos", '222.222.222-22', 10500.25, 'Morada do Sol','Desenvolvedor de Software',999999999,
        'marcos@email.com','senha123', 'cliente');

        $matheuzinho = new Cliente("Matheus Dresch", '333.333.333-33', 10000.00, 'Linha Imperial','Gestor de RH',988888888,
        'dresch@email.com','senha123', 'cliente');

        $faria = new Cliente("Matheus Faria", '444.444.444-44', 12300.00, 'Hermano','Vendedor de Carros',977777777,
        'faria_matt@email.com','senha123', 'cliente');

        $moises = new Cliente("Moisés", '555.555.555-55', 7900.00, 'Hervalzinho','Analista de Sistemas',966666666,
        'moi@email.com','senha123', 'cliente');

        $vinicius = new Cliente("Vinícius", '666.666.666-66', 5780.65, 'Nova','Física',955555555,
        'vini_fisico@email.com','senha123', 'cliente');

        $listaDeClientes = [
            $jessica->getCpf() => $jessica,
            $marcos->getCpf() => $marcos,
            $matheuzinho->getCpf() => $matheuzinho,
            $faria->getCpf() => $faria,
            $moises->getCpf() => $moises,
            $vinicius->getCpf() => $vinicius,
        ];

        return $listaDeClientes;
    }

}

