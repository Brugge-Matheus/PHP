<?php
/* D -> Dependency Inversion Principle (Princípio da Inversão de Dependências)
   - Significa que em vez de as classes de alto nível dependerem diretamente das classes de baixo nível, elas devem depender de interfaces ou abstrações.

   - Indica a estratégia de depender de interfaces ou classes abstratas, ao invés de classes concretas.
*/

// Não segue o princípio
class MySqlConn {
    public function connect() {

    }
}

class UsuarioDAO {
    private $db;

    public function __construct() {
        $this->db = new MySqlConn();
    } 
}

// Segue o princípio
interface NewDatabase {
    public function connect();
}

class NewOracleConn implements NewDatabase {
    public function connect() {
        
    }
}

class NewMySqlConn implements NewDatabase {
    public function connect() {
        
    }
}

class NewUsuarioDAO {
    private $db;

    public function __construct(NewDatabase $dbcon) {
        $this->db = $dbcon;
    } 
}

$dbconnOracle = new NewOracleConn();
$dbconnMysql = new NewMySqlConn();

$UsuarioDao = new NewUsuarioDAO($dbconnOracle);
$UsuarioDao2 = new NewUsuarioDAO($dbconnMysql);



/* Problemas de violar o princípio
    - 
    - 
    - 
    - 

*/
