<?php

namespace br\com\sicredi\projetoCredEasy\modelo;

use br\com\sicredi\projetoCredEasy\modelo\Cliente;

class Emprestimo {

  //private $idEmprestimo;
  //private $cpfDoCliente;
  private $valorEmprestimo;
  private $taxaDeJuros;
  private $valorFinal; // idem
  private $dataDeSolicitacao;
  private $dataDeQuitacao; // não uso no construtor agora
  private $statusEmprestimo;
  

  // função contrutora
  public function __construct(float $valorEmprestimo, float $taxaDeJuros, float $valorFinal, string $dataDeSolicitacao,
  string $dataDeQuitacao, string $statusEmprestimo) 
  {
    
    $this->setValorEmprestimo($valorEmprestimo);
    $this->setTaxaDeJuros($taxaDeJuros);
    $this->setValorFinal($valorFinal);
    $this->setDataDeSolicitacao($dataDeSolicitacao);
    $this->setDataDeQuitacao($dataDeQuitacao);
    $this->setStatusEmprestimo($statusEmprestimo);

  }

  // Validações
  

  // Funções Setters

  public function setValorEmprestimo(float $valorEmprestimo): void
  {
    $this->valorEmprestimo = $valorEmprestimo;

  }

  public function setTaxaDeJuros(float $taxaDeJuros): void
  {
    $this->taxaDeJuros = $taxaDeJuros;

  }

  public function setValorFinal(float $valorFinal): void
  {
    $this->valorFinal = $valorFinal;

  }

  public function setDataDeSolicitacao(string $dataDeSolicitacao): void
  {
    $this->dataDeSolicitacao = $dataDeSolicitacao;

  }

  public function setDataDeQuitacao(string $dataDeQuitacao): void
  {
    $this->dataDeQuitacao = $dataDeQuitacao;

  }

  public function setStatusEmprestimo(string $statusEmprestimo): void
  {
    $this->statusEmprestimo = $statusEmprestimo;

  }


  // Funções Getters - Funções para recuperar

  public function getValorEmprestimo(): float
  {
    return $this->valorEmprestimo;

  }

  public function getTaxaDeJuros(): float
  {
    return $this->taxaDeJuros;

  }

  public function getValorFinal(): float
  {
    return $this->valorFinal;

  }

  public function getDataDeSolicitacao(): string
  {
    return $this->dataDeSolicitacao;

  }

  public function getDataDeQuitacao(): string
  {
    return $this->dataDeQuitacao;

  }

  public function getStatusEmprestimo(): string
  {
    return $this->statusEmprestimo;

  }

}

//$emprestimoJessica = new Emprestimo(10000, 0.1, 11000, '2022-05-29','2023-05-29', "Em aberto");
//var_dump($emprestimoJessica);

//(float $valorEmprestimo, float $taxaDeJuros, float $valorFinal, string $dataDeSolicitacao,
  //string $dataDeQuitacao, string $statusEmprestimo) 
/*echo "Empréstimo: " . $emprestimoJessica->getValorEmprestimo() . PHP_EOL;
echo "Taxa de Juros: " . $emprestimoJessica->getTaxaDeJuros() . PHP_EOL;
echo "Total do Empréstimo: " . $emprestimoJessica->getValorFinal() . PHP_EOL;
echo "Data de Solicitação: " . $emprestimoJessica->getDataDeSolicitacao() . PHP_EOL;
echo "Data de Quitação: " . $emprestimoJessica->getDataDeQuitacao() . PHP_EOL;
echo "Status do Empréstimo: " . $emprestimoJessica->getStatusEmprestimo() . PHP_EOL;*/