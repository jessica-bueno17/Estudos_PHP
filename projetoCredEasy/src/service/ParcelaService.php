<?php

namespace br\com\sicredi\projetoCredEasy\service;

use br\com\sicredi\projetoCredEasy\modelo\Parcela;


class ParcelaService {

    public function listaTodasAsParcelas(): array 
    {
        // consulta as parcelas banco de dados...
        $parcelaJessica = new Parcela(1,2,125.00,'2022-07-15');
        
        $listaDeParcelas = [
            $parcelaJessica->getNumeroDaParcela() => $parcelaJessica
        ];

        return $listaDeParcelas;
    }

}

//$teste = new EmprestimoService();
//var_dump($teste->listaTodosOsEmprestimos());