<?php
/* L -> Liskov Substitution Principe (Princípio da Substituição de Liskov)
   - Dita que uma classe que é extendida de outra precisa obrigatoriamente conseguir utilizar todas as suas funcionalidades, sem alterar a estrutura e o retorno das funcionalidades

   - “Se para cada objeto o1 do tipo S há um objeto o2 do tipo T de forma que, para todos os programas P definidos em termos de T, o comportamento de P é inalterado quando o1 é substituído por o2 então S é um subtipo de T”
*/

// Não segue o princípio
class NewA {
    public function getNome() {
        return "My name is A";
    }
}

class NewB extends NewA {
    public function getNome() {
        return 30;
    }
}

function NewprintNome(NewA $obj) {
    return $obj->getNome();
}

$Newobj1 = new NewA();
$Newobj2 = new NewB();
echo NewprintNome($Newobj1)."\n";
echo NewprintNome($Newobj2)."\n\n";

// Segue o princípio
class A {
    public function getNome() {
        return "My name is A";
    }
}

class B extends A {
    public function getNome() {
        return "My name is B";
    }
}

function printNome(A $obj) {
    return $obj->getNome();
}

$obj1 = new A();
$obj2 = new B();
echo printNome($obj1)."\n";
echo printNome($obj2);



/* Problemas de violar o princípio
    - Dificuldade de Extensibilidade
    - Complexidade Crescente
    - Violência de Subtipo
    - Acoplamento Elevado
    - Impacto na Manutenção e Testabilidade

*/
