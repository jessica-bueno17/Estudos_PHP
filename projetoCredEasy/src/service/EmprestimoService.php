<?php

namespace br\com\sicredi\projetoCredEasy\service;

use br\com\sicredi\projetoCredEasy\modelo\Emprestimo;


class EmprestimoService {

    public function listaTodosOsEmprestimos(): array 
    {
        // consulta os empréstimosno banco de dados...

        $emprestimoJessica1 = new Emprestimo(2, '007.795.810-16', 2000, 0.10,'2022-05-30');
        $emprestimoJessica1->setStatusEmprestimo('Aprovado');

        $emprestimoJessica2 = new Emprestimo(1, '007.795.810-16', 5000, 0.10,'2019-01-15');
        $emprestimoJessica2->setStatusEmprestimo('Quitado');
        $emprestimoJessica2->setDataDeQuitacao('2021-03-15');
        $emprestimoJessica2->setValorFinal(5500);

       
        $listaDeEmprestimos = [
            $emprestimoJessica1->getIdEmprestimo() => $emprestimoJessica1,
            $emprestimoJessica2->getIdEmprestimo() => $emprestimoJessica2,
        ];

        return $listaDeEmprestimos;
    }

}

//$teste = new EmprestimoService();
//var_dump($teste->listaTodosOsEmprestimos());