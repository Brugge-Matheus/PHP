<?php 

interface Database {
    public function listProducts();
    public function addProducts();
    public function alterProduct();
    public function deleteProduct();

}

class MysqlDB implements Database {
    public int $idProduto;

    public function __construct(int $idProduto = 0) {
        $this->idProduto = $idProduto;
    }

    public function listProducts() {

    }

    public function addProducts() {
        $this->idProduto++;
        echo "Produto ".$this->idProduto." adicionado com sucesso ao MySql!<br><br>";
    }

    public function alterProduct() {

    }

    public function deleteProduct() {

    }
}

class OracleDB implements Database {
    public int $idProduto;

    public function __construct(int $idProduto = 0) {
        $this->idProduto = $idProduto;
    }
    
    public function listProducts() {

    }

    public function addProducts() {
        $this->idProduto++;
        echo "Produto ".$this->idProduto." adicionado com sucesso ao Oracle!<br><br>";
    }

    public function alterProduct() {

    }

    public function deleteProduct() {

    }
}

$dbMysql = new MysqlDB();
$dbOracle = new OracleDB();

$dbMysql->addProducts();
$dbOracle->addProducts();

