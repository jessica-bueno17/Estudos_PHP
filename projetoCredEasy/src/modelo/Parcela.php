<?php

namespace br\com\sicredi\projetoCredEasy\modelo;

class Parcela {

  //private $idEmprestimo;
  //private $cpfCliente;
  private $valorParcela;
  private $numeroParcela;
  private $multa;
  private $dataVencimento;
  private $dataPagamento;
  private $valorPago;
  private $statusParcela;
  
  // função contrutora
  public function __construct(float $valorParcela, int $numeroParcela, float $multa, string $dataVencimento,
  string $dataPagamento, float $valorPago, string $statusParcela) 
  {
    
    $this->setValorParcela($valorParcela);
    $this->setNumeroParcela($numeroParcela);
    $this->setMulta($multa);
    $this->setDataVencimento($dataVencimento);
    $this->setDataPagamento($dataPagamento);
    $this->setValorPago($valorPago);
    $this->setStatusParcela($statusParcela);

  }

  // Validações
  

  // Funções Setters

  public function setValorParcela(float $valorParcela): void
  {
    $this->valorParcela = $valorParcela;

  }

  public function setNumeroParcela(int $numeroParcela): void
  {
    $this->numeroParcela = $numeroParcela;

  }

  public function setMulta(float $multa): void
  {
    $this->multa = $multa;

  }

  public function setDataVencimento(string $dataVencimento): void
  {
    $this->dataVencimento = $dataVencimento;

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


  // Funções Getters - Funções para recuperar

  public function getValorParcela(): float
  {
    return $this->valorParcela;

  }

  public function getNumeroParcela(): int
  {
    return $this->numeroParcela;

  }

  public function getMulta(): float
  {
    return $this->multa;

  }

  public function getDataVencimento(): string
  {
    return $this->dataVencimento;

  }

  public function getDataPagamento(): string
  {
    return $this->dataPagamento;

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

//(float $valorParcela, int $numeroParcela, float $multa, string $dataVencimento,
//string $dataPagamento, float $valorPago, string $statusParcela) 

//$parcelaJessica = new Parcela(916.67,2,0,'2022-06-15','2022-06-08',916.67,'Paga');
//var_dump($parcelaJessica);
/*echo "Valor parcela: " . $parcelaJessica->getValorParcela() .PHP_EOL;
echo "Número parcela: " . $parcelaJessica->getNumeroParcela() .PHP_EOL;
echo "Valor multa: " . $parcelaJessica->getMulta() .PHP_EOL;
echo "Data Vencimento: " . $parcelaJessica->getDataVencimento() .PHP_EOL;
echo "Data Pagamento: " . $parcelaJessica->getDataPagamento() .PHP_EOL;
echo "Valor pago: " . $parcelaJessica->getValorPago() .PHP_EOL;
echo "Status parcela: " . $parcelaJessica->getStatusParcela() .PHP_EOL;*/