<?php

namespace br\com\sicredi\projetoCredEasy\modelo;

class Cliente{

  private $cpf;
  private $nome;
  private $renda;
  private $endereco;
  private $profissao;
  private $numeroTelefone;
  private $email;
  private $senha;
  private $tipoDeUsuario;

  // função contrutora
  public function __construct(string $nome, string $cpf, float $renda, string $endereco, string $profissao,
  int $numeroTelefone, string $email,string $senha, string $tipoDeUsuario) 
  {
    $this->validaNome($nome);
    
    $this->setNome($nome);
    $this->setCpf($cpf);
    $this->setRenda($renda);
    $this->setEndereco($endereco);
    $this->setProfissao($profissao);
    $this->setNumeroTelefone($numeroTelefone);
    $this->setEmail($email);
    $this->setSenha($senha);
    $this->SetTipoDeUsuario($tipoDeUsuario);

  }

  // Validações
  private function validaNome(string $nome)
  {
    if (strlen($nome)<3){
        echo 'Nome precisa ter pelo menos 3 caracteres. ' .PHP_EOL;
        exit();
    }
  }

  // Funções Setters

  public function setNome(string $nome): void
  {
    $this->nome = $nome;

  }

  public function setCpf(string $cpf): void
  {
    $this->cpf = $cpf;

  }

  public function setRenda(float $renda): void
  {
    $this->renda = $renda;

  }

  public function setEndereco(string $endereco): void
  {
    $this->endereco = $endereco;

  }

  public function setProfissao(string $profissao): void
  {
    $this->profissao = $profissao;

  }

  public function setNumeroTelefone(int $numeroTelefone): void
  {
    $this->numeroTelefone = $numeroTelefone;

  }

  public function setEmail(string $email): void
  {
    $this->email = $email;

  }

  public function setSenha(string $senha): void
  {
    $this->senha = $senha;

  }

  public function setTipoDeUsuario(string $tipoDeUsuario): void
  {
    $this->tipoDeUsuario = $tipoDeUsuario;

  }


  // Funções Getters - Funções para recuperar

  public function getNome(): string
  {
    return $this->nome;

  }

  public function getCpf(): string
  {
    return $this->cpf;

  }

  public function getRenda(): float
  {
    return $this->renda;

  }

  public function getEndereco(): string
  {
    return $this->endereco;

  }

  public function getProfissao(): string
  {
    return $this->profissao;

  }

  public function getNumeroTelefone(): int
  {
    return $this->numeroTelefone;

  }

  public function getEmail(): string
  {
    return $this->email;

  }

  public function getSenha(): string
  {
    return $this->senha;

  }

  public function getTipoDeUsuario(): string
  {
    return $this->tipoDeUsuario;

  }

}

/*$jessica = new Cliente("Jéssica", '007.795.810-16', 2525.00, 'Cidade Nova','Professora',985453048,
'jessica_basaldivia@hotmail.com','senha123', 'cliente');
//var_dump($jessica);
echo "Cliente: " . $jessica->getNome() . PHP_EOL;
echo "CPF: " . $jessica->getCpf() . PHP_EOL;
echo "Renda: " . $jessica->getRenda() . PHP_EOL;
echo "Endereço: " . $jessica->getEndereco() . PHP_EOL;
echo "Profissão: " . $jessica->getProfissao() . PHP_EOL;
echo "Número de Telefone: " . $jessica->getNumeroTelefone() . PHP_EOL;
echo "Email: " . $jessica->getEmail() . PHP_EOL;
echo "Senha: " . $jessica->getSenha() . PHP_EOL;
echo "Tipo de Usuário: " . $jessica->getTipoDeUsuario() . PHP_EOL;

echo '===========' .PHP_EOL;
$jessica->setNome('Jéssica Bueno');
echo "Cliente: " . $jessica->getNome() . PHP_EOL;
$jessica->setNumeroTelefone(9885453000);
echo "Número de Telefone: " . $jessica->getNumeroTelefone() . PHP_EOL;*/
