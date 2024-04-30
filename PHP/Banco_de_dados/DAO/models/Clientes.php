<?php 
class Cliente {
    private $idCliente;
    private $nomeCompleto;
    private $telefone;
    private $email;
    private $dataCadastro;

    public function setIdCliente($i) {
        $this->idCliente = ($i);
    }

    public function getIdCliente() {
        return $this->idCliente;
    }

    public function setNomeCompleto($n) {
        $this->nomeCompleto = ucwords(trim($n));
    }

    public function getNomeCompleto() {
        return $this->nomeCompleto;
    }

    public function setTelefone($t) {
        $this->telefone = $t;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setEmail($e) {
        $this->email = strtolower(trim($e));
    }

    public function getEmail() {
        return $this->email;
    }

    public function getDataCadastro() {
        $this->dataCadastro = date('Y-m-d');
        return $this->dataCadastro; 
    }
    
}

interface ClienteDAO {
    public function add(Cliente $u);
    public function findAll();
    public function findById($id);
    public function findByEmail($e);
    public function update(Cliente $u);
    public function delete( $id);
}