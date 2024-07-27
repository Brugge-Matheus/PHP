<?php

interface Database
{
    public function listProducts(): array;

    public function createProduct();

    public function updateProduct();

    public function deleteProduct();
}

class MysqlDB implements Database
{
    public function listProducts():array
    {

    }

    public function createProduct()
    {
        return "Adicionando com Mysql";
    }

    public function updateProduct()
    {

    }

    public function deleteProduct()
    {

    }
}

class OracleDB implements Database
{
    public function listProducts(): array
    {

    }

    public function createProduct()
    {
        return "Adicionando com Oracle";
    }

    public function updateProduct()
    {

    }

    public function deleteProduct()
    {

    }
}

$mysql = new MysqlDB();
$oracle = new OracleDB();

echo $mysql->createProduct() . PHP_EOL;
echo $oracle->createProduct() . PHP_EOL;