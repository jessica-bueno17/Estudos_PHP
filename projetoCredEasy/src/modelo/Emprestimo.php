<?php

namespace br\com\sicredi\projetoCredEasy\modelo;

class Emprestimo {

  private $idEmprestimo;
  private $cpfDoCliente;

  private $valorEmprestimo;
  private $taxaDeJuros;
  private $dataDeSolicitacao;

  //não uso no construtor agora
  private $statusEmprestimo = 'Solicitado';
  private $dataDeQuitacao = ""; 
  private $valorFinal;

  // função contrutora
  public function __construct(int $idEmprestimo, string $cpfDoCliente, float $valorEmprestimo, float $taxaDeJuros,
  string $dataDeSolicitacao) 
  {
    $this->setIdEmprestimo($idEmprestimo);
    $this->setCpfDoCliente($cpfDoCliente);
    $this->setValorEmprestimo($valorEmprestimo);
    $this->setTaxaDeJuros($taxaDeJuros);
    $this->setDataDeSolicitacao($dataDeSolicitacao);

  }

  // ========= Funções Setters ============
  public function setIdEmprestimo(int $idEmprestimo): void
  {
    $this->idEmprestimo = $idEmprestimo;

  }

  public function setCpfDoCliente(string $cpfDoCliente): void
  {
    $this->cpfDoCliente = $cpfDoCliente;

  }

  public function setValorEmprestimo(float $valorEmprestimo): void
  {
    $this->valorEmprestimo = $valorEmprestimo;

  }

  public function setTaxaDeJuros(float $taxaDeJuros): void
  {
    $this->taxaDeJuros = $taxaDeJuros;

  }

  public function setDataDeSolicitacao(string $dataDeSolicitacao): void
  {
    $this->dataDeSolicitacao = $dataDeSolicitacao;

  }

  public function setValorFinal(float $valorFinal): void
  {
    $this->valorFinal = $valorFinal;

  }

  public function setDataDeQuitacao(string $dataDeQuitacao): void
  {
    $this->dataDeQuitacao = $dataDeQuitacao;

  }

  public function setStatusEmprestimo(string $statusEmprestimo): void
  {
    $this->statusEmprestimo = $statusEmprestimo;

  }

  // ======== Funções Getters ===========
  public function getIdEmprestimo(): int
  {
    return $this->idEmprestimo;

  }

  public function getCpfDoCliente(): string
  {
    return $this->cpfDoCliente;

  }

  public function getValorEmprestimo(): float
  {
    return $this->valorEmprestimo;

  }

  public function getTaxaDeJuros(): float
  {
    return $this->taxaDeJuros;

  }

  public function getDataDeSolicitacao(): string
  {
    return $this->dataDeSolicitacao;

  }

  
  public function getValorFinal(): float
  {
    return $this->valorFinal;

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

$emprestimoJessica = new Emprestimo(2, '007.795.810-16', 2000, 0.10,'2022-05-30');
var_dump($emprestimoJessica);

/*echo "ID Empréstimo: " . $emprestimoJessica->getIdEmprestimo() . PHP_EOL;
echo "CPF do Cliente: " . $emprestimoJessica->getCpfDoCliente() . PHP_EOL;
echo "Empréstimo: " . $emprestimoJessica->getValorEmprestimo() . PHP_EOL;
echo "Taxa de Juros: " . $emprestimoJessica->getTaxaDeJuros() . PHP_EOL;
echo "Data de Solicitação: " . $emprestimoJessica->getDataDeSolicitacao() . PHP_EOL;
echo "Status do Empréstimo: " . $emprestimoJessica->getStatusEmprestimo() . PHP_EOL;
echo "Data de Quitação: " . $emprestimoJessica->getDataDeQuitacao() . PHP_EOL;*/
//echo "Total do Empréstimo: " . $emprestimoJessica->getValorFinal() . PHP_EOL;
