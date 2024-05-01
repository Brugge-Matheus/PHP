<?php 
require 'models/Clientes.php';

class ClienteDAOMysql implements ClienteDAO {
    private $pdo;

    public function __construct(PDO $driver) {
        $this->pdo = $driver;
    }

    public function add(Cliente $user) {
        $sql = $this->pdo->prepare("INSERT INTO clientes VALUES (DEFAULT, :nomeCompleto, :telefone, :email, :dataCadastro);");
        $sql->bindValue(':nomeCompleto', $user->getNomeCompleto());
        $sql->bindValue(':telefone', $user->getTelefone());
        $sql->bindValue(':email', $user->getEmail());
        $sql->bindValue(':dataCadastro', $user->getDataCadastro());
        $sql->execute();

        $user->setIdCliente($this->pdo->lastInsertId());
        return $user;
    }

    public function findAll() {
        $arr = array();

        $sql = $this->pdo->query("SELECT * FROM clientes");
        if($sql->rowCount() > 0) {
            $data = $sql->fetchAll(PDO::FETCH_ASSOC);

            foreach($data as $value) {
                $u = new Cliente();
                $u->setIdCliente($value['idCliente']);
                $u->setNomeCompleto($value['nomeCompleto']);
                $u->setTelefone($value['telefone']);
                $u->setEmail($value['email']);
                $u->getDataCadastro();

                $arr[] = $u;
            }
        }

        return $arr;
    }

    public function findByEmail($email) {
        $sql = $this->pdo->prepare("SELECT * FROM clientes where email = :email");
        $sql->bindValue(':email', $email);
        $sql->execute();
        if($sql->rowCount() > 0) {
            $data = $sql->fetch();

            $user = new Cliente;
            $user->setIdCliente($data['idCliente']);
            $user->setNomeCompleto($data['nomeCompleto']);
            $user->setTelefone($data['telefone']);
            $user->setEmail($data['email']);

            return $user;

        } else {
            return false;
        }
    }

    public function findById($id) {
        $sql = $this->pdo->prepare("SELECT * FROM clientes WHERE idCliente = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    
        if($sql->rowCount() > 0) {
            $data = $sql->fetch();
    
            $user = new Cliente();
            $user->setIdCliente($data['idCliente']);
            $user->setNomeCompleto($data['nomeCompleto']);
            $user->setTelefone($data['telefone']);
            $user->setEmail($data['email']);
    
            return $user;
        } else {
            return true;
        }
    }
    

    public function update(Cliente $user) {
        $sql = $this->pdo->prepare("UPDATE clientes SET nomeCompleto = :nomeCompleto, telefone = :telefone, email = :email, dataCadastro = :data WHERE idCliente = :id;");
    
        $sql->bindValue(':id', $user->getIdCliente());
        $sql->bindValue(':nomeCompleto', $user->getNomeCompleto());
        $sql->bindValue(':telefone', $user->getTelefone());
        $sql->bindValue(':email', $user->getEmail());
        $sql->bindValue(':data', $user->getDataCadastro());
        $sql->execute();
    
        return true;
    }
    

    public function delete($id) {
        $sql = $this->pdo->prepare("DELETE FROM clientes WHERE idCliente = :id;");
        $sql->bindValue(':id', $id);
        $sql->execute();

        return true;
    }

}