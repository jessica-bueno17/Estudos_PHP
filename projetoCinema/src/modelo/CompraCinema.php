<?php

class CompraCinema{
  
  private $tipoCliente;
  private $valorIngresso;
  private $quantidadeDeIngressos;


  public function __construct(string $tipoCliente,float $valorIngresso,float $quantidadeDeIngressos)
  {

    $this->setTipoCliente($tipoCliente);
    $this->setValorIngresso($valorIngresso);
    $this->setQuantidadeDeIngressos($quantidadeDeIngressos);

  }

  public function setTipoCliente(string $tipoCliente):void
  {
    $this->tipoCliente = $tipoCliente;
  }

  public function setValorIngresso(float $valorIngresso):void
  {
    $this->valorIngresso = $valorIngresso;
  }

  public function setQuantidadeDeIngressos(float $quantidadeDeIngressos):void
  {
    $this->quantidadeDeIngressos = $quantidadeDeIngressos; 
  }

  public function getTipoCliente():string
  {
    return $tipoCliente;
  }

  public function getValorIngresso():float
  {
    return $valorIngresso;
  }

  public function getQuantidadeDeIngressos():float
  {
    return $quantidadeDeIngressos; 
  }

  /*private function valorIngresso(float $valorIngresso):float
  {
    if($this->tipoCliente === "INTEIRO"){
      $this->valorIngresso = $valorIngresso;
      return $valorIngresso;
    };

    if($this->tipoCliente === "CONVENIO_SICREDI"){
      $this->valorIngresso = $valorIngresso*0.2;
      return $valorIngresso;
    };

    if($this->tipoCliente === "ESTUDANTE"){
      $this->valorIngresso = $valorIngresso*0.5;
      return $valorIngresso;
    };
  }

  public function valorTotalIngressos(float $valorIngresso,float $quantidadeDeIngressos):float
  {
    $valorTotal = $valorIngresso*$quantidadeDeIngressos;
    return $valorTotal;
  }*/


}

$x = new CompraCinema("ESTUDANTE",10,4);
//$x->setQuantidadeDeIngressos(2);
var_dump($x);


