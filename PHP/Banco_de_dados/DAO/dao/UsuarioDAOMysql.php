<?php 
require_once 'models/Clientes.php';

class UsuarioDAOMysql implements ClienteDAO {
    private $pdo;

    public function __construct(PDO $conn) {
        $this->pdo = $conn;
    }

    public function add(Cliente $u) {

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

    public function findById($id) {


    }

    public function update(Cliente $u) {

    }

    public function delete($id) {

    }

}