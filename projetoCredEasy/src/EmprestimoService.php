<?php

namespace br\com\sicredi\projetoCredEasy\service;

require_once 'modelo/Cliente.php';
require_once 'modelo/Emprestimo.php';
require_once 'service/ClienteService.php'; 

use br\com\sicredi\projetoCredEasy\modelo\Cliente;
use br\com\sicredi\projetoCredEasy\modelo\Emprestimo;

use br\com\sicredi\projetoCredEasy\service\ClienteService;

class EmprestimoService {


    public function listaTodosOsEmprestimos(): array 
    {

        $clienteService = new ClienteService();
        $listaDeClientes = $clienteService->listaTodosOsClientes();

        $emprestimoJessica1 = new Emprestimo(1, '007.795.810-16', 5000, 0.10,'2019-01-15',$listaDeClientes["007.795.810-16"]);
        $emprestimoJessica1->setStatusEmprestimo('Quitado');
        $emprestimoJessica1->setDataDeQuitacao('2021-03-15');
        $emprestimoJessica1->setValorFinal(5500);

        $emprestimoJessica2 = new Emprestimo(2, '007.795.810-16', 2000, 0.10,'2022-05-30',$listaDeClientes["007.795.810-16"]);
        $emprestimoJessica2->setStatusEmprestimo('Aprovado');
        // ================================

        $emprestimoMarcos1 = new Emprestimo(3, '222.222.222-22', 4000, 0.15,'2019-01-15',$listaDeClientes["222.222.222-22"]);
        $emprestimoMarcos1->setStatusEmprestimo('Quitado');
        $emprestimoMarcos1->setDataDeQuitacao('2021-03-15');
        $emprestimoMarcos1->setValorFinal(4400);

        $emprestimoMarcos2 = new Emprestimo(4, '222.222.222-22', 2300, 0.10,'2022-05-30',$listaDeClientes["222.222.222-22"]);
        $emprestimoMarcos2->setStatusEmprestimo('Aprovado');
        // ================================

        $emprestimoMatheuzinho1 = new Emprestimo(5, '333.333.333-33', 15000, 0.13,'2019-01-15',$listaDeClientes["333.333.333-33"]);
        $emprestimoMatheuzinho1->setStatusEmprestimo('Quitado');
        $emprestimoMatheuzinho1->setDataDeQuitacao('2021-03-15');
        $emprestimoMatheuzinho1->setValorFinal(3300);

        $emprestimoMatheuzinho2 = new Emprestimo(6, '333.333.333-33', 7000, 0.12,'2022-05-30',$listaDeClientes["333.333.333-33"]);
        $emprestimoMatheuzinho2->setStatusEmprestimo('Aprovado');
        // ================================

        $emprestimoFaria1 = new Emprestimo(7, '444.444.444-44', 8000, 0.10,'2019-01-15',$listaDeClientes["444.444.444-44"]);
        $emprestimoFaria1->setStatusEmprestimo('Quitado');
        $emprestimoFaria1->setDataDeQuitacao('2021-03-15');
        $emprestimoFaria1->setValorFinal(5500);

        $emprestimoFaria2 = new Emprestimo(8, '444.444.444-44', 2000, 0.10,'2022-05-30',$listaDeClientes["444.444.444-44"]);
        $emprestimoFaria2->setStatusEmprestimo('Aprovado');
        // ================================

        $emprestimoMoises1 = new Emprestimo(9, '555.555.555-55', 5030, 0.10,'2019-01-15',$listaDeClientes["555.555.555-55"]);
        $emprestimoMoises1->setStatusEmprestimo('Quitado');
        $emprestimoMoises1->setDataDeQuitacao('2021-03-15');
        $emprestimoMoises1->setValorFinal(5500);

        $emprestimoMoises2 = new Emprestimo(10, '555.555.555-55', 2000, 0.10,'2022-05-30',$listaDeClientes["555.555.555-55"]);
        $emprestimoMoises2->setStatusEmprestimo('Aprovado');
        // ================================

        $emprestimoVinicius1 = new Emprestimo(11, '666.666.666-66', 6700, 0.10,'2019-01-15',$listaDeClientes["666.666.666-66"]);
        $emprestimoVinicius1->setStatusEmprestimo('Quitado');
        $emprestimoVinicius1->setDataDeQuitacao('2021-03-15');
        $emprestimoVinicius1->setValorFinal(5500);

        $emprestimoVinicius2 = new Emprestimo(12, '666.666.666-66', 2300, 0.10,'2022-05-30',$listaDeClientes["666.666.666-66"]);
        $emprestimoVinicius2->setStatusEmprestimo('Aprovado');
        // ================================


       
        $listaDeEmprestimos = [
            $emprestimoJessica1->getIdEmprestimo() => $emprestimoJessica1,
            $emprestimoJessica2->getIdEmprestimo() => $emprestimoJessica2,
            $emprestimoMarcos1->getIdEmprestimo() => $emprestimoMarcos1,
            $emprestimoMarcos2->getIdEmprestimo() => $emprestimoMarcos2,
            $emprestimoMatheuzinho1->getIdEmprestimo() => $emprestimoMatheuzinho1,
            $emprestimoMatheuzinho2->getIdEmprestimo() => $emprestimoMatheuzinho2,
            $emprestimoFaria1->getIdEmprestimo() => $emprestimoFaria1,
            $emprestimoFaria2 ->getIdEmprestimo() => $emprestimoFaria2,
            $emprestimoMoises1->getIdEmprestimo() => $emprestimoMoises1,
            $emprestimoMoises2->getIdEmprestimo() => $emprestimoMoises2, 
            $emprestimoVinicius1->getIdEmprestimo() => $emprestimoVinicius1,
            $emprestimoVinicius2->getIdEmprestimo() => $emprestimoVinicius2,  
        ];

        return $listaDeEmprestimos;
    }

}

/*$teste = new EmprestimoService();
var_dump($teste->listaTodosOsEmprestimos());*/

/*$jessica = new Cliente("Jéssica Bueno",'007.795.810-16',1500, "Rua alguma coisa", "bancaria", "9999999",
 "hsuahh@hhiiajaj.com", "senha12345", "comum");


$emprestimoJessica = new Emprestimo(2, '007.795.810-16', 2000, 0.10,'2022-05-30', $jessica);*/