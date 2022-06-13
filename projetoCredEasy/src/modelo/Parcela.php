<?php

namespace br\com\sicredi\projetoCredEasy\modelo;

require_once 'Emprestimo.php';

use br\com\sicredi\projetoCredEasy\modelo\Emprestimo;

class Parcela {

  private $numeroDaParcela;
  private $idEmprestimo;
  private $valorParcela;
  private $dataVencimento;
  
  private $dataPagamento;
  private $multa;
  private $valorPago;

  private $statusParcela = "Aberta";
  
  private $emprestimo;
                
  // função contrutora
  public function __construct(int $numeroDaParcela,int $idEmprestimo, float $valorParcela,
  string $dataVencimento, Emprestimo $emprestimo)
  {
    
    $this->setNumeroDaParcela($numeroDaParcela);
    $this->setIdEmprestimo($idEmprestimo);
    $this->emprestimo = $emprestimo;
    $this->setValorParcela($valorParcela);
    $this->setDataVencimento($dataVencimento);
    
     
  }

  // ========== Funções Setters ============
  public function setNumeroDaParcela(int $numeroDaParcela): void
  {
    $this->numeroDaParcela = $numeroDaParcela;

  }

  public function setIdEmprestimo(int $idEmprestimo): void
  {
    $this->idEmprestimo = $idEmprestimo;

  }


  public function setValorParcela(float $valorParcela): void
  {
    $this->valorParcela = $valorParcela;

  }

  public function setDataVencimento(string $dataVencimento): void
  {
    $this->dataVencimento = $dataVencimento;

  }

  public function setMulta(float $multa): void
  {
    $this->multa = $multa;

  }

  public function setDataPagamento(string $dataPagamento): void
  {
    $this->dataPagamento = $dataPagamento;

  }

  public function setValorPago(float $valorPago): void
  {
    $this->valorPago = $valorPago;

  }

  public function setStatusParcela(string $statusParcela): void
  {
    $this->statusParcela = $statusParcela;

  }

  // ========= Funções Getters =========
  public function getNumeroDaParcela(): int
  {
    return $this->numeroDaParcela;

  }

  public function getIdEmprestimo(): int
  {
    return $this->idEmprestimo;

  }

  public function getValorParcela(): float
  {
    return $this->valorParcela;

  }

  public function getDataVencimento(): string
  {
    return $this->dataVencimento;

  }
  
  public function getDataPagamento(): string
  {
    return $this->dataPagamento;

  }

  public function getMulta(): float
  {
    return $this->multa;

  }

  public function getValorPago(): float
  {
    return $this->valorPago;

  }

  public function getStatusParcela(): string
  {
    return $this->statusParcela;

  }

}


//$parcelaJessica = new Parcela(1,2,125.00,'2022-07-15');
//var_dump($parcelaJessica);

/*echo "Número da Parcela: " . $parcelaJessica->getNumeroDaParcela() .PHP_EOL;
echo "Id do Empréstimo: " . $parcelaJessica->getIdEmprestimo() . PHP_EOL;
echo "Valor parcela: " . $parcelaJessica->getValorParcela() .PHP_EOL;
echo "Data Vencimento: " . $parcelaJessica->getDataVencimento() .PHP_EOL;
echo "Status parcela: " . $parcelaJessica->getStatusParcela() .PHP_EOL;*/

/*echo "Data Pagamento: " . $parcelaJessica->getDataPagamento() .PHP_EOL;
echo "Valor multa: " . $parcelaJessica->getMulta() .PHP_EOL;
echo "Valor pago: " . $parcelaJessica->getValorPago() .PHP_EOL;*/

