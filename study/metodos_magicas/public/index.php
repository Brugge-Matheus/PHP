<?php

// __construct - O método construtor em PHP é uma função especial chamada automaticamente ao criar um novo objeto de uma classe, usada para inicializar propriedades e executar código de configuração inicial.

class BaseClass
{
    public string $age;
    protected array $properties;
    protected string $query = 'INSERT INTO users VALUES (DEFAULT, name, email);';

    public function __construct(string $age = 'Not informed')
    {
        $this->age = $age;
        return var_dump($age);
    }

    public function __call(string $name, array $arguments)
    {
        var_dump($name, $arguments);
    }

    public static function __callStatic(string $name, array $arguments)
    {
        var_dump($name, $arguments);
    }

    public function __set(string $name, string $value)
    {
        $this->properties[$name] = $value;
    }

    public function __get($name)
    {
        var_dump("Não é possivel acessar o propriedade " . $this->properties[$name] . " pois ela não foi declarada");
    }

    public function __isset($name)
    {
        var_dump("Não é possivel dar isset no atributo $name pois ele nao foi declarado");
    }

    public function __unset($name)
    {
        var_dump("O atributo $name não foi declarado");
    }

    public function __toString()
    {
        return 'Não é possivel converter a propriedade ';
    }

    public function __invoke()
    {
        return "Não é um metodo existente (__invoke)";
    }

    public function __clone()
    {
        return "O Objeto foi clonado com sucesso";
    }

    public function __debugInfo()
    {
        return [
            'query' => $this->query
        ];
    }
}

// __construct - O método construtor em PHP é uma função especial chamada automaticamente ao criar um novo objeto de uma classe, usada para inicializar propriedades e executar código de configuração inicial.
$Obj1 = new BaseClass('18');

// __call - O método mágico __call em PHP é utilizado para capturar e tratar chamadas a métodos inacessíveis ou não existentes em um objeto, retornando o nome do metodo usado e tbm um array contendo os parametros passados para essa função não existente
$Obj1->create('users', 45);

// __callStatic - Captura chamadas a métodos estáticos inexistentes; similar ao __call para métodos estáticos.
$Obj1::create('users', 45);

// __set: Executado ao atribuir um valor a uma propriedade inexistente; usado para definir valores dinamicamente.
$Obj1->request = 'matheus';

// __get: Executado ao acessar uma propriedade inexistente; usado para retornar valores dinâmicos.
echo $Obj1->request;

// __isset: Executado ao usar isset() ou empty() em uma propriedade inexistente; usado para verificar a existência de propriedades dinâmicas.
isset($Obj1->request);

// __unset: Executado ao usar unset() em uma propriedade inexistente; usado para remover propriedades dinâmicas.
unset($Obj1->teste);

// __toString: Executado ao converter um objeto para string; usado para definir uma representação em string do objeto.
echo $Obj1;

// __invoke: Executado ao usar um objeto como função; permite que objetos sejam chamados como funções.
echo $Obj1();

// __clone: Executado ao clonar um objeto; usado para personalizar o processo de clonagem.
$Obj1Clone = clone $Obj1;

// __debugInfo: Executado ao usar var_dump() em um objeto; usado para definir informações de depuração.
var_dump($Obj1);